<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at https://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   mirasvit/module-search-ultimate
 * @version   2.2.9
 * @copyright Copyright (C) 2023 Mirasvit (https://mirasvit.com/)
 */



namespace Mirasvit\Search\Model\ScoreRule\Indexer;

use Magento\Framework\App\ResourceConnection;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Indexer\ActionInterface as IndexerActionInterface;
use Mirasvit\Search\Api\Data\ScoreRuleInterface;
use Mirasvit\Search\Repository\ScoreRuleRepository;
use Mirasvit\Search\Ui\ScoreRule\Source\ScoreFactorRelatively;

class ScoreRuleIndexer implements IndexerActionInterface
{
    const INDEXER_ID = 'mirasvit_search_score_rule_product';

    const RULE_ID      = ScoreRuleInterface::ID;
    const STORE_ID     = 'store_id';
    const PRODUCT_ID   = 'product_id';
    const SCORE_FACTOR = ScoreRuleInterface::SCORE_FACTOR;


    private $resource;

    private $scoreRuleRepository;


    public function __construct(
        ResourceConnection  $resource,
        ScoreRuleRepository $scoreRuleRepository
    ) {
        $this->resource            = $resource;
        $this->scoreRuleRepository = $scoreRuleRepository;
    }


    public function executeFull()
    {
        foreach ($this->scoreRuleRepository->getCollection() as $scoreRule) {
            $this->execute($scoreRule, []);
        }

        $this->executeZeroRule([]);
    }

    public function executeList(array $ids)
    {
        foreach ($this->scoreRuleRepository->getCollection() as $scoreRule) {
            $this->execute($scoreRule, $ids);
        }

        $this->executeZeroRule($ids);
    }

    public function executeRow($id)
    {
        foreach ($this->scoreRuleRepository->getCollection() as $scoreRule) {
            $this->execute($scoreRule, [$id]);
        }

        $this->executeZeroRule([$id]);
    }

    public function execute(ScoreRuleInterface $scoreRule, array $productIds)
    {
        $connection = $this->resource->getConnection();

        $this->ensureIndexTable();

        // Real Score Rules
        foreach ($scoreRule->getStoreIds() as $storeId) {
            $storeId     = intval($storeId);
            $deleteWhere = [
                self::STORE_ID . ' = ' . $storeId,
                self::RULE_ID . ' = ' . $scoreRule->getId(),
            ];
            if ($productIds) {
                $deleteWhere[] = self::PRODUCT_ID . ' IN(' . implode(',', $productIds) . ')';
            }

            $connection->delete($this->getIndexTable(), $deleteWhere);

            $idx = 0;
            $ids = $scoreRule->getRule()->getMatchingProductIds($productIds);

            $scoreFactors = $this->getScoreFactors($scoreRule, $ids);

            do {
                $rows = [];

                for (; $idx < count($ids); $idx++) {
                    $row = [
                        self::RULE_ID      => $scoreRule->getId(),
                        self::STORE_ID     => $storeId,
                        self::PRODUCT_ID   => $ids[$idx],
                        self::SCORE_FACTOR => $scoreFactors[$ids[$idx]],
                    ];

                    $rows[] = $row;

                    if (count($rows) > 1000) {
                        break;
                    }
                }

                if (count($rows)) {
                    $connection->insertMultiple($this->getIndexTable(), $rows);
                }
            } while (count($rows));
        }
    }

    private function ensureIndexTable()
    {
        $tableName = $this->getIndexTable();

        $connection = $this->resource->getConnection();

        if ($connection->isTableExists($tableName)) {
            return $this;
        }

        $table = $connection->newTable($tableName);

        $table->addColumn(self::RULE_ID, Table::TYPE_INTEGER);
        $table->addColumn(self::STORE_ID, Table::TYPE_INTEGER);
        $table->addColumn(self::PRODUCT_ID, Table::TYPE_INTEGER);
        $table->addColumn(self::SCORE_FACTOR, Table::TYPE_TEXT);

        $connection->createTable($table);

        return $this;
    }

    private function getIndexTable(): string
    {
        return $this->resource->getTableName(ScoreRuleInterface::INDEX_TABLE_NAME);
    }

    private function getScoreFactors(ScoreRuleInterface $scoreRule, array $productIds): array
    {
        [$sign, $factor, $relatively] = explode('|', $scoreRule->getScoreFactor());

        $result = [];

        if ($relatively === ScoreFactorRelatively::RELATIVELY_POPULARITY) {
            $connection = $this->resource->getConnection();

            $select = $connection->select()
                ->from(
                    ['oi' => $this->resource->getTableName('sales_order_item')],
                    ['product_id', 'cnt' => new \Zend_Db_Expr('count(*)')]
                )->joinLeft(
                    ['super' => $this->resource->getTableName('catalog_product_super_link')],
                    'super.product_id = oi.product_id',
                    ['super.parent_id']
                )
                ->joinLeft(
                    ['link' => $this->resource->getTableName('catalog_product_link')],
                    'link.linked_product_id = oi.product_id AND link.link_type_id=3',
                    ['link_id' => 'link.product_id']
                )
                ->group('product_id');

            $rows = $connection->fetchAll($select);

            foreach ($rows as $row) {
                if (!isset($result[$row['product_id']])) {
                    $result[$row['product_id']] = 0;
                }
                $result[$row['product_id']] += $row['cnt'];

                if ($row['parent_id'] > 0) {
                    if (!isset($result[$row['parent_id']])) {
                        $result[$row['parent_id']] = 0;
                    }

                    $result[$row['parent_id']] += $row['cnt'];
                }

                if ($row['parent_id'] > 0) {
                    if (!isset($result[$row['parent_id']])) {
                        $result[$row['parent_id']] = 0;
                    }

                    $result[$row['parent_id']] += $row['cnt'];
                }

                if ($row['link_id'] > 0) {
                    if (!isset($result[$row['link_id']])) {
                        $result[$row['link_id']] = 0;
                    }

                    $result[$row['link_id']] += $row['cnt'];
                }
            }

            $max = 0;
            foreach ($result as $v) {
                if ($v > $max) {
                    $max = $v;
                }
            }
            foreach ($result as $key => $value) {
                $result[$key] = $sign . (($value / $max) + 1) * $factor;
            }
            foreach ($productIds as $productId) {
                if (!isset($result[$productId])) {
                    $result[$productId] = '+0';
                }
            }
        } elseif ($relatively == ScoreFactorRelatively::RELATIVELY_RATING) {
            foreach ($productIds as $productId) {
                $result[$productId] = '+0';
            }

            $connection = $this->resource->getConnection();
            $select     = $connection->select()->from(
                $this->resource->getTableName('rating_option_vote'),
                ['product_id' => 'entity_pk_value', 'cnt' => new \Zend_Db_Expr('avg(percent)')]
            )->group('product_id');
            $rows       = $connection->fetchAll($select);
            $max        = 100;

            foreach ($rows as $row) {
                $result[$row['product_id']] = $sign . ($row['cnt'] / $max) * $factor;
            }
        } else {
            foreach ($productIds as $productId) {
                $result[$productId] = $sign . $factor;
            }
        }

        return $result;
    }

    private function executeZeroRule(array $productIds)
    {
        $connection = $this->resource->getConnection();

        $this->ensureIndexTable();

        $deleteWhere = [
            self::STORE_ID . ' = 0',
            self::RULE_ID . ' = 0',
        ];
        if ($productIds) {
            $deleteWhere[] = self::PRODUCT_ID . ' IN(' . implode(',', $productIds) . ')';
        }

        $connection->delete($this->getIndexTable(), $deleteWhere);

        // Product Search Weight
        $select = $connection->select()->from(
            [$this->resource->getTableName('catalog_product_entity')],
            ['entity_id', 'mst_search_weight']
        )->where('(mst_search_weight > 0 or mst_search_weight < 0)');
        if ($productIds) {
            $select->where('entity_id IN(' . implode(',', $productIds) . ')');
        }

        $data = $connection->fetchAll($select);
        $idx  = 0;

        do {
            $rows = [];
            for (; $idx < count($data); $idx++) {
                $id     = $data[$idx]['entity_id'];
                $factor = $data[$idx]['mst_search_weight'];
                $row    = [
                    self::RULE_ID      => 0,
                    self::STORE_ID     => 0,
                    self::PRODUCT_ID   => $id,
                    self::SCORE_FACTOR => $factor > 0 ? '+' . $factor : $factor,
                ];

                $rows[] = $row;

                if (count($rows) > 1000) {
                    break;
                }
            }

            if (count($rows)) {
                $connection->insertMultiple($this->getIndexTable(), $rows);
            }
        } while (count($rows));
    }
}