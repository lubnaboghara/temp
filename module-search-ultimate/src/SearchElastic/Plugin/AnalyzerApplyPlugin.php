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


declare(strict_types=1);

namespace Mirasvit\SearchElastic\Plugin;

/**
 * @see \Magento\Elasticsearch\Model\Adapter\FieldMapper\Product\FieldProvider\StaticField::getFields()
 */
class AnalyzerApplyPlugin
{
    public function afterGetFields($subject, array $result): array
    {
        // when SKU analyzer is enabled, wildcard exceptions aren't working (men)
        $result['_misc'] = [
            'type'     => 'text',
            'analyzer' => 'mst',
            'fields'   => [
                'keyword' => [
                    'type' => 'keyword',
                ],
            ],
        ];

        return $result;
    }
}