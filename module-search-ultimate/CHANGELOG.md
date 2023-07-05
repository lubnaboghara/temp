# Change Log
## 2.2.9
*(2023-07-04)*

#### Improvements
* Implemented a new ES analyzer that significantly improved search quality without requiring extra configuration
* Implemented a new search quality (relevance) testing approach via GraphQL queries that allows for testing a greater variety of search term combinations with different inputs in future tests
* Updated score factor algorithm for popularity, including sales for bundle products

#### Fixed
* Issue with retrieving number of reviews for autocomplete

---


## 2.2.8
*(2023-06-29)*

#### Fixed
* Issue with sorting products by position (on the category page) with Sphinx engine

---


## 2.2.7
*(2023-06-29)*

#### Improvements
* Autocomplete Fast Mode - input validation (store id)

#### Fixed
* In some cases, the product URL in the search autocomplete uses the wrong URL (to default store view)

---


## 2.2.6
*(2023-06-20)*

#### Improvements
* Autocomplete Full Page mode: Switch active index if the current index returns zero results.

#### Fixed
* Conflict with Olegnax Infinity Scroll
* Missed translation for search autocomplete (full screen mode)

---


## 2.2.5
*(2023-06-16)*

#### Improvements
* Autocomplete min price
* MSI for Search Autocomplete

#### Fixed
* Add To Cart with Autocomplete Full Screen mode

---


## 2.2.4
*(2023-06-15)*

#### Improvements
* Search autocomplete styles
* Additional information has been added to the search results debugger

#### Fixed
* Fixed an issue with the focus on the search bar in Full Screen mode
* Added missed phrases to i18n

---


## 2.2.3
*(2023-06-02)*

#### Fixed
* Issue with caching (full page cache) search results page
* Issue with saving products to ES, if attribute value size more than 32kb

---


## 2.2.2
*(2023-05-29)*

#### Improvements
* We added the button 'Apply All' for score rules, and additionally, we slightly improved the indexation mechanism for the search weight of individual products.
* Improved CLI command to import synonyms.

---


## 2.2.1
*(2023-05-16)*

#### Improvements
* Revamped bot detector functionality. Along with a built-in dictionary of ignored keywords, the function also uses stopwords. As a result, any search term, that contains special keywords still will return the results but wasn't logged in the search terms history.

---


## 2.2.0
*(2023-05-15)*

#### Improvements
* Updated search GraphQL query syntax

#### Fixed
* Issue with applying multi-word synonyms
* Prevent error if search term contains only stopwords

---


## 2.1.11
*(2023-05-08)*

#### Improvements
* Changed search query to elasticsearch to improve the relevance of results

#### Fixed
* Possible issue with price formatting exception during reindex

---


## 2.1.10
*(2023-04-25)*

#### Fixed
* Wrong pagination on magento 2.4.5

---


## 2.1.9
*(2023-04-17)*

#### Improvements
* allowed to use param "cat" in the search autocomplete

#### Fixed
* Issue with number of results in the Advanced Search

---


## 2.1.8
*(2023-04-10)*

#### Improvements
* Refined the CSS styles to enhance the visual appearance and user experience of the autocomplete feature in full-page mode.

---


## 2.1.6
*(2023-04-04)*

#### Fixed
* Resolved an issue where autocomplete (fast mode) display products that were not visible, improving the accuracy and completeness of search results.

---


## 2.1.5
*(2023-03-29)*

#### Fixed
* Fixed a bug where prices were not displaying correctly in the autocomplete (including tax) and thumbnail image, ensuring that users receive accurate and consistent pricing information across all aspects of the search experience.

---


## 2.1.4
*(2023-03-27)*

#### Fixed
*  Fixed a bug wtih empty product names in the autocomplete (only for Enterprise)

---


## 2.1.3
*(2023-03-27)*

#### Improvements
* Added Magefan Blog to the Autocomplete Fast Mode, allowing users to rapidly search for relevant content and enhancing the search's overall user experience.

---


## 2.1.2
*(2023-03-24)*

#### Improvements
* Added a new feature that enables admins to include or exclude empty categories from the indexation process, providing greater flexibility and control over the search results and ensuring that users only receive relevant and useful information.

---


## 2.1.1
*(2023-03-20)*

#### Fixed
* Issue with applying score rules without sorting by relevance
* Issue with typeahead provider (json decode)

---


## 2.1.0
*(2023-03-06)*

#### Improvements
* Improved indexation time with enabled fast mode
* Rewamped search queries to elasticsearch
* Added option to enable/disable indaxation widgets in the content

#### Fixed
* Issue with search by terms with "."
* Issues with import stopwords and synonyms (wrong path to read files)
* Fixed the conflict with Mirasvit_Scroll module
* Fixed PHP8.2

---


## 2.0.97
*(2023-02-23)*

#### Improvements
* Instant provider (Fast mode) for Mageplaza blog

---


## 2.0.96
*(2023-02-17)*

#### Fixed
* Autocomplete provider: Undefined offset
---

## 2.0.95
*(2023-02-15)*

#### Fixed
* Elasticsearch: Limit reached on the number of clauses
* Indexation error "analyzer/trigram has not been configured in mappings"

---


## 2.0.94
*(2023-02-06)*

#### Fixed
* GraphQL: Wrong total number of results with misspelled query

---


## 2.0.93
*(2023-02-03)*

#### Fixed
* Compatibility with Amasty_Mage245Fix
* Sphinx search engine - issue with sorting by name

---


## 2.0.91
*(2023-01-30)*

#### Fixed
* Wrong search results with synonyms
* Added missed phrases to i18n

---


## 2.0.90
*(2023-01-18)*

#### Fixed
* Type issue with Mysql Search

---


## 2.0.89
*(2023-01-12)*

#### Fixed
* Full page mode pagination + view all link

---


## 2.0.88
*(2023-01-04)*

#### Fixed
* Search in returns categories from another store

---


## 2.0.87
*(2022-12-21)*

#### Fixed
* Max Clause error
* issue with applying product search weights

---


## 2.0.86
*(2022-12-05)*

#### Fixed
* Issue on saving search autocomplete configuration (2.4.5)

---


## 2.0.85
*(2022-11-09)*

#### Fixed
* GraphQL error with "getTotal" function

---


## 2.0.84
*(2022-11-09)*

#### Fixed
* Issue with large synonyms

---


## 2.0.82
*(2022-11-04)*

#### Improvements
* Debug Toolbar

#### Fixed
* GraphQL

---


## 2.0.81
*(2022-10-13)*

#### Fixed
* GraphQL

---


## 2.0.80
*(2022-10-10)*

#### Fixed
* added __typename to graphql objects

---


## 2.0.79
*(2022-09-28)*

#### Fixed
* Correct conditions for Search In functionality
* Category search compatibility with Amasty Finder
* Minor fixes for search functionality

---


## 2.0.78
*(2022-09-26)*

#### Fixed
* Category search compatibility with Amasty ShopBy
* Category search minor fixes

---


## 2.0.76
*(2022-09-20)*

#### Fixed
* Sphinx engine indexing issue
* Magento Search Terms indexing issue
* Search autocomplete correct scroll behavior

---


## 2.0.75
*(2022-09-08)*

#### Fixed
* Wrong idendifier for getFrom in autocomplete fast mode

---


## 2.0.74
*(2022-09-08)*

#### Fixed
* Product title duplicates in Search Autocomplete "Full Size" layout
* Date format in score boost rules issue

#### Improvements
* Added optional sidebar filters, pagination for Search Autocomplete "Full Size" layout


---


## 2.0.73
*(2022-08-31)*

#### Fixed
* Automatic price navigation step calculation issue
* GraphQL compatibility minor fixes

---


## 2.0.72
*(2022-08-26)*

#### Fixed
* Hide Layered Navigation for search results except product search index

#### Improvements
* Allow multiple keywords for search landing page
* Added "Search In" functionality

---


## 2.0.71
*(2022-08-19)*

#### Fixed
* Headers already sent on search landing page
* Add misspell for search autocomplete Fast Mode with elasticsearch engine

---


## 2.0.70
*(2022-08-15)*

#### Fixed
* Magento 2.4.5 compatibility minor fixes

---


## 2.0.69
*(2022-08-11)*

#### Fixed
* Changed 301 to 302 redirect for 404 to search functionality
* Synonyms minor fix

---


## 2.0.68
*(2022-08-08)*

#### Fixed
* Search autocomplete images use the admin domain in Fast Mode
* MySQL engine wildcard filter builder issue
* Indexing issue for blog index
* Synonyms and stopwords import

#### Improvements
* Added module uninstall command support
* Restore search autocomplete Fast Mode for Sphinx engine
* Sphinx engine now supports catalog queries (with default filters and sorting)

---


## 2.0.67
*(2022-07-25)*

#### Fixed
* Correct search results weighting
* Correct search synonyms functionality
* Removed "not" words functionality
* Added categories blacklist for category index
* Get long tail applicable attributes automatically
* Search autocomplete fast mode miss store specific price
* Mageplaza Blog Post indexing issue

---


## 2.0.65
*(2022-06-30)*

#### Fixed
* Add total results size and aggregations to GraphQL results
* Correct search query logger params

---


## 2.0.64
*(2022-06-21)*

#### Fixed
* Unknown column 'search_weight' in 'field list' issue on setup:upgrade first run

---


## 2.0.63
*(2022-06-20)*

#### Improvements
* Switch to declarative DB schema
* Delete search synonyms table for magento 2.4+ versions
* Add ajax option for add to cart in search autocomplete
* Make ASCII folding optional

#### Fixed
* GraphQL spell correction compatibility
* Price attribute in search autocomplete fast mode issue

---


## 2.0.62
*(2022-05-27)*

#### Fixed
* Long Tail problem (SKU filter for GraphQL)
* CMS Page indexing issue

---


## 2.0.61
*(2022-05-19)*

#### Improvements
* Search synonyms functionality

---


## 2.0.60
*(2022-05-17)*

#### Improvements
* update mirasvit/module-core dependency

---


## 2.0.59
*(2022-05-12)*

#### Fixed
* Corrected omit tabs functionality
* Undefined index error in GraphQL for Category and Attribute search indexes
---


## 2.0.58
*(2022-05-09)*

#### Improvements
* Added description field to search landing pages

#### Fixed
* Corrected autocomplete stock status translation
* GraphQL product search paging issue
* GraphQL CMS page index

---


## 2.0.57
*(2022-04-20)*

#### Fixed
* Correct child products indexing
* MySQL search engine compatibility

---


## 2.0.56
*(2022-04-06)*

#### Fixed
* Doubling URL suffix in search autocomplete results
* Version comparison compatibility with patched versions

---


## 2.0.55
*(2022-03-24)*

#### Fixed
* correct search index status applying
* PHP8.1, Magento 2.4.4 compatibility

---


## 2.0.54
*(2022-03-21)*

#### Fixed
* Use default case register for search index
* Amasty Blog Post instant provider issue
* Make elastic search index prefix unique

---


## 2.0.53
*(2022-03-03)*

#### Improvements
* Added Magento Search Query search index in search autocomplete

#### Fixed
* Mageplaza blog post indexing issue
* Blackbird Advanced Content indexing issue
* Trigger fast mode config update on reindex

---


## 2.0.52
*(2022-01-17)*

#### Fixed
* Hide empty autocomplete placeholder

---


## 2.0.51
*(2022-01-04)*

#### Improvements
* Add filter statement support to GraphQL

#### Fixed
* Emulate search results applier for MySQL and Sphinx engines

---


## 2.0.50
*(2021-12-20)*

#### Fixed
* Correct condition for botDetectorService
* Indexing issue with addCategoryData option
* Correct query service transliteration functionality

---


## 2.0.49
*(2021-12-16)*

#### Fixed
* Price Navigation Step - Calculation Automatic triggers error for Mysql and Sphinx
* Correct IP filter for BotDetectorService

---


## 2.0.48
*(2021-12-15)*

#### Improvements
* Hack attempts detector improvements
* Added accented words support

---


## 2.0.47
*(2021-12-13)*

#### Improvements
* Add sorting functionality support for GraphQL search

#### Fixed
* Indexing issue with addCustomOptions enabled
* Show stock status issue in search autocomplete

---


## 2.0.46
*(2021-12-09)*

#### Improvements
* Add sorting functionality support for GraphQL search

#### Fixed
* Page size and Current page variables processing for GraphQL search

---


## 2.0.45
*(2021-12-08)*

#### Improvements
* Add stock status to search autocomplete

#### Fixed
* "Unknown column 'search_index.sku' in order clause" error

---


## 2.0.44
*(2021-11-25)*

#### Improvements
* Quick Data Bar

#### Fixed
* addCustomOptions indexing issue
* Landing page: wrong recommendation links issue
* Amasty blog indexing issue

---


## 2.0.43
*(2021-11-08)*

#### Improvements
* Styles for Search Autocomplete

---


## 2.0.42
*(2021-11-04)*

#### Fixed
* Restore VES blog support

---


## 2.0.41
*(2021-10-13)*

#### Fixed
* Isses with GraphQL Search Query results

---


## 2.0.40
*(2021-10-05)*

#### Fixed
* Search autocomplete empty search term issue
* Product url leads to admin in fast mode
* Hack attempts detector
* Missing children products when search by child product option enabled
* Build filters in search autocomplete without options issue
* Search by children products indexing issue in EE

---


## 2.0.39
*(2021-09-02)*

#### Fixed
* Error when price range starts from 0
* Missing urls on brand index
* Search by children products issues

---


## 2.0.38
*(2021-08-13)*

#### Features
* Added Mirasvit Brand search index

#### Fixed
* Remove hardcode image resize for search autocomplete, using upsell_products_list image instead

---


## 2.0.37
*(2021-08-09)*

#### Fixed
* Omitting synonyms import errors
* Decrease fast mode indexing time
* Sorting issues on Magento commerce with MySQL engine
* Synonyms import issue
* WP search results missing taxonomy term in URL
* Type error on empty sort order for mysql engine
* Add filters to search autocomplete fast mode full size
* Missing score rules table after install

---


## 2.0.36
*(2021-07-09)*

#### Fixed
* Get attribute collection issue in autocomplete config maker
* Error creating elasticsearch request
* Autocomplete fast mode wildcard issue
* Fast mode common issues

---


## 2.0.35
*(2021-06-30)*

#### Fixed
* Misspell elastic indexing issue
* SM AttributeSearch compatibility
* Autocomplete displays page builder markup
* Add Mirasvit blog index support
* Restore query_string search
* Misspell indexing issue
* Validator error with missing indexes

---


## 2.0.34
*(2021-05-27)*

#### Fixed
* Unable to search for child products in MySQL engine
* Cron reindex issue
* Optimize misspell indexing process
* Wrong add to cart url in autocomplete
* Undefined constant php in index template
* Environment emulation nesting issue
* Search autocomplete mobile expand collapse issue

---


## 2.0.33
*(2021-04-19)*

#### Fixed
* Wrong ACL permissions for synonyms
* Fallback search memory issue
* Sorting of products with MySql search engine
* Pagination issue
* Cron reindex issue

---


## 2.0.31
*(2021-04-13)*

#### Fixed
* Setup:upgrade notice
* Abort XHR on form submit

---


## 2.0.30
*(2021-03-19)*

#### Fixed
* сyrillic characters reindex issue in misspell
* missing sphinx manage buttons
* search results highlight issues

---


## 2.0.29
*(2021-03-17)*

#### Fixed
* Translation placeholder dont replace placeholder
* Search input hide on mobile view
* Fast mode miss results
* Page builder indexing issue
* Force landing page response redirect
* Incorrect product url in autocomplete

---


## 2.0.28
*(2021-03-03)*

#### Fixed
* Apply inline score script when score rules exists

---


## 2.0.27
*(2021-02-22)*

#### Fixed
* Add Blackbird ContentManager index support
* Aheadworks blog index issue
* Process mgz_pagebuilder content
* `Add to cart` button, cannot be translated and received cookie

---


## 2.0.26
*(2021-02-04)*

#### Fixed
* Pagination issue
* Boost rules apply for one page
* Missing synonyms for fast mode
* Wrong argument type required for instant provider
* GraphQL issue
* Apply negative individual search weight issue
* Unable to apply synonyms to numeric terms
* Search autocomplete failed when "session expired" error exists

---

## 2.0.25
*(2021-01-28)*

#### Fixed
* Amasty_blog сompatibility
* Decoding failed after magento update
* Magefan blog reindex issue
* No search results for direct match with dash
* Search numeric attributes issue
* "Add to cart" button cookie value

---

## 2.0.24
*(2021-01-20)*

#### Fixed
* Category search index indexation issue
* Add indexation issues verbose output
* "require_once" statement detected fix (Marketplace compatibility).

---

## 2.0.23
*(2021-01-19)*

#### Fixed
* Incorrect highlight behavior, missing direct entries for highlight
* Set group_concat_max_len for MySQL engine queries

---

## 2.0.22
*(2021-01-13)*

#### Fixed
* Sphinx engine fix for marketplace

---

## 2.0.21
*(2021-01-12)*

#### Fixed
* Unable to edit category tree conditions in score boost rules issue

---

## 2.0.20
*(2021-01-11)*

#### Fixed
* Incorrect synonyms data from instant provider
* Missing categories filter with mysql engine
* Search results show all products in one page

---

## 2.0.19
*(2021-01-06)*

#### Fixed
* Search typeahead issue
* Match phrase processing issue
* No search autocomplete results by default after install
* Blank search results page when category index goes first with no results

---

## 2.0.18
*(2020-12-17)*

#### Fixed
* Restore debug.phtml

---

## 2.0.17
*(2020-12-14)*

#### Fixed
* missing price in autocomplete fast mode

---

## 2.0.16
*(2020-12-10)*

#### Fixed
* Add alert after reset indexes click

---


## 2.0.15
*(2020-12-09)*

#### Fixed
* Undefined offset in misspell
* Manage search autocomplete indexes issue

---


## 2.0.14
*(2020-11-26)*

#### Fixed
* score boost rules on elasticsearch engine
* type error on search autocomplete fast mode reindex

---


## 2.0.13
*(2020-11-25)*

#### Features
* Added Mirasvit KB tags to searchable attributes

#### Fixed
* Error processing numeric search attributes in fast mode

---


## 2.0.12
*(2020-11-24)*

#### Fixed
* Numeric attributes search query processing issue
* Restore "Reset Store Indexes" button

---


## 2.0.11
*(2020-10-30)*

#### Features
* Graphql search

#### Fixed
* Short term search issue
* Amasty parts finder compatibility

---


## 2.0.10
*(2020-10-20)*

#### Features
* Prevention on saving a search term on redirect from 404 to search

#### Fixed
* Issue with indexation (Magento 2.4.1)
* Error redirecting empty search term to homepage

---

## 2.0.0
*(2020-08-04)*

#### Key notes
* Starting 2.0.0 - for Magento 2.4 and higher;
* Up to 1.1.7 version - Magento 2.1 - 2.3
* Magento 2.1 - 2.3 uses submodules. Magento 2.4+ uses only Mirasvit/module-search-ultimate package for search

#### Deprecated functionality :  
* "Products in categories" index is no longer available for search autocomplete in Magento 2.4+ versions;
* "Popular suggestions" index is no longer available for search autocomplete in Magento 2.4+ versions;




##  Search [mirasvit/module-search]


## 1.0.151
*(2020-09-17)*

#### Fixed
* CMS page index with widget indexing issue

---


## 1.0.150
*(2020-09-07)*

#### Fixed
* Mageplaza_AjaxLayer sorting apply issue
* Filter out non-searchable attributes
* Codazon_ajaxlayerednavpro compatibility
* Multiple attribute index status apply issue with Elasticsearch
* Native elasticsearch7 compatibility
* Dismiss 404 to search redirect if the request contains 404
* Query highlight issue

---


## 1.0.149
*(2020-06-16)*
#### Improvements
* Added comment for incompatibility with Fast Mode Autocomplete options

#### Fixed
* Unexpected special char appears on highlight
* Mana_layerednavigationajax paging compatibility
* Incorrect stemming behavior

---


## 1.0.148
*(2020-06-02)*

#### Fixed
* Array to string conversion on reindex
* Amasty Blog posts links
* Unexpected numeric results
* Emulation nesting error
* Manage search results tabs display
* Category search returns relevance 0

---


## 1.0.147
*(2020-04-30)*

#### Fixed
* Category reindex issue on Magento 2.3.5 Enterprise
* select attributes override

---


### 1.0.146
*(2020-04-23)* 

#### Fixed

* Score boost rules indexing issue
* Filter out suggested search terms with mysql entries
* CMS pages indexing issue
* Weltpixel LRN compatibility


## 1.0.145
*(2020-04-14)*

#### Fixed
* weltpixel LRN compatibility 
* CMS pages indexing issue
* filter out suggested search terms with mysql entries
* score boost rules indexing issue

---


## 1.0.144
*(2020-04-07)*

#### Fixed
* disallow json encoded values for elasticsearch indexer
* highlight search result text case override
* multi-select attributes reindex issue when Search by child products disabled ([#250]())
* highlight search result text case override
* ignore empty categories on reindex

---

## 1.0.143
*(2020-03-18)*

#### Fixed
* Bundle products indexing issue (include child products by default)
* Decrease score rules indexing time
* Magento SharedCatalog search issue
* Popular suggestions don't support wildcard exceptions
* Upgrade schema issue

---

## 1.0.142
*(2020-03-05)*

#### Fixed
* Issue with serialization on magento 2.1

---

## 1.0.141
*(2020-02-18)*

#### Fixed
* Issue with plugin loadEntities

---


## 1.0.140
*(2020-02-13)*

#### Fixed
* disable query log (for some reasons SQL queries are shown on frontend)

---


## 1.0.139
*(2020-02-12)*

#### Fixed
* Environment emulation nesting is not allowed error when CMS page index enabled
* Duplicate entry mst_search_weight on Setup upgrade
* Search highlight issue (replacement is applied to placeholder)

---


## 1.0.138
*(2020-02-03)*

#### Fixed
* Magento 2.3.4 compatibility

---


## 1.0.137
*(2019-12-17)*

#### Fixed
* Wrong highlight behavior
* Add deprecated classes

---


## 1.0.136
*(2019-11-28)*

#### Fixed
* Highlight issue

---


## 1.0.135
*(2019-11-27)*

#### Fixed
* Issue with unicode

---


## 1.0.134
*(2019-11-25)*

#### Fixed
* Show empty results if search query is empty or minimum query length

---


## 1.0.133
*(2019-11-13)*

#### Fixed
* Multi-store results function doens't redirect properly

---


## 1.0.132
*(2019-11-11)*

#### Fixed
* Ambigious class declaration
* Undefined elastic factories
* Error while setting up M2.1.12 EE

---


## 1.0.131
*(2019-10-16)*

#### Fixed
* Compatibility with Magento 2.3.3
* Score rule apply issue

---


## 1.0.130
*(2019-10-09)*

#### Fixed
* Individual search weight saving issue

---


## 1.0.129
*(2019-10-09)*

#### Fixed
* Display informative errors on synonyms and stopwords import
* Duplicate duplicate cms page index ignore page options
* Individual search weight saving issue

---


## 1.0.128
*(2019-09-10)*

#### Fixed
* EQP (each)
* Issue with validator form (M 2.3.0)

---


## 1.0.127
*(2019-09-03)*

#### Fixed
* Issue with filtration of Synonyms/Stopwords/Score Rules (backend)

---


## 1.0.126
*(2019-08-28)*

#### Improvements
* Synonyms import

---


## 1.0.125
*(2019-08-27)*

#### Fixed
* Issue with YAML

---


## 1.0.124
*(2019-07-30)*

#### Fixed
* Issue with validator
* ICanSearchProductId Test
* advanced search issue
* Issue with Magento 2.3.2 after switch to MySQL engine

---


## 1.0.123
*(2019-07-08)*

#### Fixed
* Magento 2.3.2 advanced search issue

#### Features
* Fishpig Glossary index support

---


## 1.0.122
*(2019-06-13)*

#### Fixed
* Mass update search_weight
* Issue with compilation (with TemplateMonster/AjaxCatalog)
* Moved messages about possible magento modules which contain "search in name" 
* Compatibility with Magento 2.3.1 Elasticsearch
* Doubled field values in CMS index.

---


## 1.0.121
*(2019-04-24)*

#### Fixed
* Fast mode ensure issue
* Mageplaza fix hint

## 1.0.120
*(2019-04-08)*

#### Fixed
* Similar results in multiple attribute indexes
* Environment emulation nesting is not allowed 

#### Features
* Ensure Search Autocomplete fast mode on search reindex

---

## 1.0.119
*(2019-03-21)*

#### Fixed
* Manadev compatibility fix
---

## 1.0.118
*(2019-03-19)*

#### Fixed
* Manadev compatibility
---

## 1.0.117
*(2019-01-04)*

#### Fixed
* JS issue with index attributes
* Solved conflict with Mageplaza_LayeredNavigation
---

## 1.0.116
*(2018-12-29)*

#### Improvements
* Added ability to search by AW Blog Post tags
* Mageplaza ajax layer

#### Fixed
* compatibility with TemplateMonsters_AjaxCatalog

---


## 1.0.114
*(2018-12-25)*

#### Improvements
* Rename column search_weight to mst_search_weight for prevent possible conflicts after disabling the module
* Compatibility with BlueFoot

---


## 1.0.113
*(2018-12-14)*

#### Fixed
* Issue with saving index attributes (for new indexes) 

---


## 1.0.112
*(2018-12-13)*

#### Features
* Catalog image is clickable

#### Fixed
* Issue with store switcher url

---

## 1.0.111
*(2018-12-06)*

#### Fixed
* Issue with store switcher on multistore search results [#87]

---


## 1.0.110
*(2018-12-06)*

#### Fixed
* switch stores on multistore results [#87]

---


## 1.0.109
*(2018-12-05)*

#### Fixed
* Issue with Search Weight during mass product update

---


## 1.0.108
*(2018-11-29)*

#### Fixed
* Compatibility with Magento 2.3
* wrong results for queries with specific characters

---


## 1.0.107
*(2018-11-15)*

#### Fixed
* Allow to cache search results #82
* Search by child products issue, bundles included even with disabled function #186

---


## 1.0.106
*(2018-11-13)*

#### Fixed
* Push out of stock products to the end issue #179

---


## 1.0.105
*(2018-11-13)*

#### Improvements
* Migration validation for WeltPixel_CmsBlockScheduler

#### Fixed
* Issue with class generation on Magento Cloud
* Highlight issue with special chars 

---


## 1.0.104
*(2018-11-05)*

#### Fixed
* Styling issue with Aheadworks blog

---


## 1.0.103
*(2018-11-05)*

#### Fixed
* Issue with highlights

---


## 1.0.102
*(2018-11-02)*

#### Fixed
* PHP 5.6 Syntax Error

---


## 1.0.101
*(2018-10-29)*

#### Features
* Added validator to detect different search engine settings

#### Fixed
* Issue with products index edit

---


## 1.0.100
*(2018-10-15)*

#### Fixed
* Issue with slow admin load (JS render time)

---


## 1.0.99
*(2018-10-12)*

#### Fixed
* Bundled products indexing issue
* Highlighter issue

---

## 1.0.98
*(2018-10-09)*

#### Fixed
* Reindex issue using mirasvit:search:reindex

---

## 1.0.97
*(2018-10-09)*

#### Fixed
* Issue with autocomplete provider
* Highlighter issue

---


## 1.0.96
*(2018-10-03)*

#### Fixed
* Issue with attribute

---


## 1.0.95
*(2018-10-03)*

#### Fixed
* Ves Blog indexing issue

---


## 1.0.94
*(2018-10-01)*

#### Features
* Add other search results to product results if results QTY less then 5

---


## 1.0.93
*(2018-09-28)*

#### Features
* Show Category Thumbnail in the search results 

---


## 1.0.92
*(2018-09-26)*

#### Fixed
* Issue with ContentManager

---


## 1.0.91
*(2018-09-26)*

#### Features
* Blackbird ContentManager Search Index

#### Fixed
* Issue with required core version

---


## 1.0.90
*(2018-09-21)*

#### Fixed
* Processing multiselect attributes

---


## 1.0.89
*(2018-09-21)*

#### Fixed
* Issue with module disable plugin

---


## 1.0.88
*(2018-09-21)*

#### Improvements
* Validator (Check possible conflicts with other search extensions)

---


## 1.0.87
*(2018-09-20)*

#### Improvements
* Added Amasty Blog Search Index

---


## 1.0.86
*(2018-09-20)*

#### Fixed
* Reindex issue with native mysql engine
* Fixed issue after module disable 

---


## 1.0.85
*(2018-09-18)*

#### Fixed
* Issue with unavailable index type on index edit screen

---


## 1.0.84
*(2018-09-17)*

#### Improvements
* Support multiple indexes for magento_catalog_attribute
* Added functionality to use multiple Catalog Attribute index

---


## 1.0.83
*(2018-09-11)*

#### Fixed
* Bug with ScoreServiceInterface

---


## 1.0.82
*(2018-09-10)*

#### Improvements
* Added addititonal functionality to Score Rules

#### Fixed
* Score Rule Save & Continue is not working for new rules

---


## 1.0.81
*(2018-09-06)*

#### Fixed
* ACL

---


## 1.0.80
*(2018-09-06)*

#### Improvements
* Added Score Boost Rule
* Added Apply button to edit form
* Support 2.1

#### Fixed
* UI component load error (2.1.2)
* Issue with SKU weight

---


## 1.0.79
*(2018-08-27)*

#### Improvements
* Custom weight apply logic

#### Fixed
* Issue with attributes synchronization

---


## 1.0.78
*(2018-08-01)*

#### Features
* Search Index for Amasty FAQ

#### Fixed
* fixed SSL certificate verify failed issue in search autocomplete speed validator ([#47](../../issues/47))

---


## 1.0.77
*(2018-06-08)*

#### Fixed
* Issue with empty node

---


## 1.0.76
*(2018-05-17)*

#### Fixed
* search only by active categories option
* wrong Sold QTY attribute settings

---


## 1.0.75
*(2018-03-06)*

#### Features
* Added search results validator and search speed test
* Added functionality to adjust relevance based on sold items quantity

---


## 1.0.74
*(2018-03-06)*

#### Fixed
* Issue with ordering

---



## 1.0.73
*(2018-03-06)*

#### Features
* Create search index for Mirasvit Gift Registry extension #25

---


## 1.0.72
*(2018-02-13)*

#### Improvements
* New search index: AW Blog

---


## 1.0.71
*(2018-02-12)*

#### Fixed
* Translation

---


## 1.0.70
*(2018-02-01)*

#### Fixed
* Issue with special chars (%) in suggested queries

---


## 1.0.69
*(2018-01-30)*

#### Fixed
* Issue with multi-store results

---


## 1.0.68
*(2018-01-16)*

#### Fixed
* Translations in suggestion.phtml

---


## 1.0.67
*(2018-01-15)*

#### Improvements
* Engine status visualization

#### Fixed
* Mageplaza blog index

---


## 1.0.66
*(2018-01-09)*

#### Fixed
* Issue with autocomplete

---



### 1.0.65
*(2017-12-14)*

#### Fixed
* Magento 2.2.2 - removed symfony/yaml requirement

---

### 1.0.64
*(2017-12-14)*

#### Improvements
* Strip tags method for Cms Pages index

---

### 1.0.63
*(2017-12-13)*

#### Improvements
* Changes related to search in categories functionality (#6)

---

### 1.0.62
*(2017-12-06)*

#### Fixed
* Performance issues with complex synonyms

---

### 1.0.61
*(2017-12-01)*

#### Improvements
* Ability to run search reindex for specified store or index (bin/magento mirasvit:search:reindex --store _id_ --index _identifier_)
* Code Formatting

---

### 1.0.60
*(2017-12-01)*

#### Fixed
* Issue with sorting products

---

### 1.0.59
*(2017-11-29)*

#### Fixed
* Added store filter to Magefan blog

---

### 1.0.58
*(2017-11-21)*

#### Improvements
* Recurring script for convert serialized values to JSON

---

### 1.0.57
*(2017-11-20)*

#### Fixed
* Issue with joining attributes

---

### 1.0.56
*(2017-11-17)*

#### Fixed
* Issue with long-tail expression form

---

### 1.0.55
*(2017-10-17)*

#### Improve
* Show/hide suggested search terms on search result page

---

### 1.0.54
*(2017-10-17)*

#### Fixed
* Issue with data-mappers
* Issue with Json decode

---

### 1.0.53
*(2017-10-12)*

#### Improvements
* Russian stemmer

#### Fixed
* Do not lowercase indexed text

---

### 1.0.52
*(2017-10-05)*

#### Improvements
* Added ability to select Match Mode (AND or OR)

---

### 1.0.51
*(2017-09-28)*

#### Fixed
* Issue with unserialize (replaced with JSON)

---

### 1.0.50
*(2017-09-27)*

#### Fixed
* M2.2
* Issue with No Results page
* UI error on index edit page

---

### 1.0.47
*(2017-09-08)*

#### Fixed
* Issue with product mapper

---

### 1.0.46
*(2017-09-06)*

#### Fixed
* Issue with Search Report
* Strip tags filter

---

### 1.0.45
*(2017-09-05)*

#### Fixed
* Improved stripTags method

---

### 1.0.44
*(2017-09-04)*

#### Improvements
* Links to manual

#### Fixed
* Weights synchronization

---

### 1.0.43
*(2017-08-31)*

#### Fixed
* No results in search reports

---

### 1.0.42
*(2017-08-14)*

#### Fixed
* Issue with tab
* properly emulate store environment

---

### 1.0.41
*(2017-08-08)*

#### Fixed
* Issue with slow js rendering (backend)

---
### 1.0.40
*(2017-08-04)*

#### Fixed
* Ability to sort products by stock status

---
### 1.0.39
*(2017-07-28)*

#### Fixed
* Synonyms

---

### 1.0.37
*(2017-07-21)*

#### Fixed
* Responsive styles for indexes
* Convert synonyms/stopwords to lowercase before save
* Issue with blog indexation

---
### 1.0.36
*(2017-06-30)*

#### Fixed
* Issue with local Synonyms/Stopword dicitonary

---
### 1.0.35
*(2017-06-27)*

#### Improvements
* Added additional params to build urls for wordpress blog

#### Fixed
* Issue with weights

---
### 1.0.34
*(2017-06-22)*

#### Fixed
* Issue with index invalidation

---

### 1.0.33
*(2017-06-21)*

#### Improvements
* Added option to force sort order for products

---

### 1.0.32
*(2017-06-19)*

#### Fixed
* Bundled Products (EE)
* Issue with synonyms

---

### 1.0.31
*(2017-06-19)*

#### Fixed
* Issue with mass delete

---

### 1.0.30
*(2017-06-16)*

#### Fixed
* Attribute
* Issue with attribute synchronization
* Issue with updating index status after change properties/attributes

---

### 1.0.27
*(2017-06-07)*

#### Improvements
* Media types for 404 to search

#### Fixed
* Installation script

---

### 1.0.26
*(2017-06-07)*

#### Improvements
* Backend UI

#### Fixed
* EE bundled

---

### 1.0.25
*(2017-05-29)*

#### Fixed
* CLI

---

### 1.0.24
*(2017-05-24)*

#### Fixed
* Issue with Replace Words

---

### 1.0.23
*(2017-05-24)*

#### Fixed
* Changed "Indices" to "Indexes"

---

### 1.0.22
*(2017-05-23)*

#### Fixed
* Issue with local synonyms/stopwords files

---

### 1.0.21
*(2017-05-18)*

#### Improvements
* Long tail hint

#### Fixed
* Issue with search_weight attribute
* Fixed an issue with custom search weight

---

### 1.0.20
*(2017-05-04)*

#### Improvements
* Reindex visualization

#### Fixed
* Issue with engine status checker

---

### 1.0.19
*(2017-04-26)*

#### Improvements
* New search index for Mageplaza blog

#### Fixed
* Issue with properties saving

---

### 1.0.18
*(2017-04-18)*

#### Fixed
* Fixed an issue with cms page reindex

---

### 1.0.17
*(2017-04-18)*

#### Fixed
* Fixed an issue with custom weights

---

### 1.0.16
*(2017-04-13)*

#### Fixed
* Fixed an issue with EngineResolver path

---

### 1.0.15
*(2017-04-12)*

#### Fixed
* Fixed an issue with EngineResolver path

---

### 1.0.14
*(2017-04-10)*

#### Fixed
* Issue with EE reindex
* Fixed an issue with autocomplete provider

---

### 1.0.13
*(2017-04-07)*

#### Fixed
* Fixed an error with index "Attribute"

---

### 1.0.12
*(2017-04-06)*

#### Fixed
* Issue with installation script

---

### 1.0.11
*(2017-04-06)*

#### Fixed
* Fixed an issue with saving index properties

---

### 1.0.10
*(2017-04-06)*

#### Improvements
* Added prefix for search indices tables

---

### 1.0.9
*(2017-04-05)*

#### Fixed
* Fixed an issue with clear installation

---

### 1.0.8
*(2017-04-05)*

#### Improvements
* Changed locale resolver interface for stemming

#### Fixed
* Fixed an issue with autocomplete provider

---

### 1.0.7
*(2017-04-04)*

#### Fixed
* Issue with autocomplete
* Fixed an issue with importing stopwords

---

### 1.0.6
*(2017-04-04)*

#### Fixed
* Minor fixes

---

### 1.0.5
*(2017-03-31)*

#### Fixed
* Issue with installation

---

### 1.0.4
*(2017-03-31)*

#### Fixed
* Fixed an issue with generators

---

### 1.0.3
*(2017-03-09)*

#### Fixed
* Fixed an issue with compilation
* Minor naming problem

---

### 1.0.2
*(2017-03-06)*

#### Improvements
* Improved synonyms import interface

#### Fixed
* Fixed an issue with synonyms

---

### 1.0.1
*(2017-03-03)*

#### Improvements
* Performance

#### Fixed
* Fixed an issue with indexation

---

### 1.0.0
*(2017-02-17)*

#### Improvements
* Cloud service for synonyms/stopwords
* Initial release after split mirasvit/module-search-sphinx

#### Fixed
* Fixed an issue with filter by out of stock products

------


##  Search Sphinx [mirasvit/module-search-sphinx]


## 1.1.56
*(2020-10-05)*

#### Fixed
* Reset Sphinx action clear Custom Base Path folder

---


## 1.1.55
*(2020-09-07)*

#### Improvements
* Add notification for Search Autocomplete Fast Mode

#### Fixed
* Sphinx 3.1.1 compatibility

---


## 1.1.54
*(2020-05-14)*

#### Improvements
* Sphinx checking status

#### Fixed
* fast mode missing index

---


## 1.1.53
*(2020-04-13)*

#### Improvements
* Sphinx checking status

#### Fixed
* Missing add to cart button in fast mode

---


## 1.1.52
*(2020-03-03)*

#### Fixed
* Autocomplete spinner doesnt hide when nothing found in the search autocomplete
* Fallback engine on category view request

---


## 1.1.51
*(2020-01-02)*

#### Improvements
* Inform customer if sphinx port already used by another instance

---

## 1.1.50
*(2019-11-13)*

#### Improvements
* Display solution along with error text

---

## 1.1.49
*(2019-08-13)*

#### Fixed
* Marketplace compatibility

---

## 1.1.48
*(2019-08-02)*

#### Fixed
* Advanced search issue
* Keep Sphinx folder on 'Reset' from admin

---

## 1.1.47
*(2019-06-27)*

#### Fixed
* Magento 2.3.2 compatibility

---

## 1.1.46
*(2019-05-21)*

#### Fixed
* sphinx reindex issue

---

## 1.1.45
*(2019-04-18)*

#### Fixed
* Skip non-searchable attributes while search reindex

---

## 1.1.44
*(2019-04-01)*

#### Improvements
* Ability to use advansed search options, synonyms, stopwords in fast mode

---
## 1.1.43
*(2018-11-29)*

#### Fixed
* Search in stores with fast mode

---

## 1.1.42
*(2018-11-29)*

#### Fixed
* Compatibility with Magento 2.3

---

## 1.1.41
*(2018-11-01)*

#### Fixed
* missing BP constant issue

---

## 1.1.40
*(2018-10-24)*

#### Fixed
* Issue with cleanIndex for Sphinx engine

---

## 1.1.39
*(2018-10-16)*

#### Fixed
* Instance for '' not found
* unexpected BAD_NUMERIC 

---

## 1.1.38
*(2018-09-20)*

#### Fixed
* Reindex issue

---

## 1.1.37
*(2018-09-20)*

#### Fixed
* Reindex issue

---

## 1.1.36
*(2018-09-19)*

#### Fixed
* Issue with ves blog

---

## 1.1.35
*(2018-09-12)*

#### Improvements
* Multi-indexes for one type

---

## 1.1.34
*(2018-09-11)*

#### Improvements
* Compatibility

#### Fixed
* Issue with fast autocomplete

---

## 1.1.33
*(2018-07-31)*

#### Improvements
* Full reindex time

---

## 1.1.32
*(2018-07-11)*

#### Fixed
* Sphinx does not search by keywords with dash

---

## 1.1.31
*(2018-07-05)*

#### Improvements
* Wirdcard match more relevant then exact match

---

## 1.1.30
*(2018-07-02)*

#### Improvements
* Autostart on search

---

## 1.1.29
*(2018-06-18)*

#### Fixed
* Issue with di:compile

---

## 1.1.28
*(2018-06-18)*

#### Fixed
* Autocomplete config

---

## 1.1.27
*(2018-06-14)*

#### Fixed
* Wrong echo

---

## 1.1.26
*(2018-06-14)*

#### Features
* Fast mode for Search Autocomplete

---

## 1.1.25
*(2018-04-20)*

#### Fixed
* Sphinx special chars

---

## 1.1.24
*(2018-02-16)*

#### Features
* add gift registry search index for sphinx


---

## 1.1.23
*(2017-12-18)*

#### Fixed
* Issue with synonyms

---

### 1.1.22
*(2017-12-14)*

#### Fixed
* Removed symfony/yaml requirement

---

### 1.1.21
*(2017-11-24)*

#### Fixed
* MySQL server has gone away
* PHP 7.2 compatibility

---

### 1.1.20
*(2017-10-24)*

#### Fixed
* Issue with filtration

---

### 1.1.19
*(2017-10-17)*

#### Fixed
* Issue with relative path

---

### 1.1.18
*(2017-10-11)*

#### Improvements
* Ability to define custom sphinx path

---

### 1.1.17
*(2017-10-06)*

#### Improvements
* Ability to define custom charset_table

---

### 1.1.16
*(2017-09-26)*

#### Fixed
* M2.2

---

### 1.1.15
*(2017-09-21)*

#### Fixed
* Issue with escape

---

### 1.1.14
*(2017-09-15)*

#### Fixed
* Issue with fresh installation

---

### 1.1.13
*(2017-08-11)*

#### Fixed
* Issue with category pages

---

### 1.1.12
*(2017-08-10)*

#### Fixed
* Support 'not-words' with sphinx search engine

---

### 1.1.11
*(2017-07-28)*

#### Fixed
* Issue with category pages

---

### 1.1.10
*(2017-07-21)*

#### Improvements
* Option to enable/disable sphinx daemon auto start

---

### 1.1.9
*(2017-06-29)*

#### Fixed
* Kb provider

---

### 1.1.8
*(2017-06-26)*

#### Fixed
* Issue with weight

---

### 1.1.7
*(2017-06-20)*

#### Fixed
* Issue with relevance

---

### 1.1.6
*(2017-05-19)*

#### Fixed
* Issue with infix len
* Issue with one char search

---

### 1.1.4
*(2017-05-05)*

#### Improvements
* Sphinx manage CLI

---

### 1.1.3
*(2017-04-14)*

#### Fixed
* Suggestions data provider

---

### 1.1.2
*(2017-04-13)*

#### Fixed
* Issues with indexation

---

### 1.1.1
*(2017-04-04)*

#### Fixed
* Fixed an issue with requirements

---

### 1.1.0
*(2017-04-04)*

#### Improvements
* Split modules

---

### 1.0.60
*(2017-02-06)*

#### Fixed
* Fixed an issue with default sort direction

---

### 1.0.59
*(2017-02-06)*

#### Fixed
* Fixed a set of issue related with data serialization
* Issue with feature "push out of stock products"

---

### 1.0.57
*(2017-01-24)*

#### Fixed
* Fixed singularize issue in Dutch language (affects all)
* Fixed an issue with catalog attribute index

---

### 1.0.56
*(2017-01-20)*

#### Improvements
* Increased number of sphinx client max_children

---

### 1.0.55
*(2017-01-20)*

#### Improvements
* Added new search index: Catalog Attributes

---

### 1.0.54
*(2017-01-13)*

#### Fixed
* Fixed an issue with store based configuration

---

### 1.0.53
*(2017-01-12)*

#### Improvements
* Added search index for Ves Brands
* Added search index for Ves Blog
* Backend interface

---

### 1.0.52
*(2016-12-23)*

#### Fixed
* Fixed an issue with out of stock products

---

### 1.0.51
*(2016-12-21)*

#### Fixed
* Fixed an issue with new block

#### Documentation
* updated docs

---

### 1.0.50
*(2016-12-16)*

#### Features
* Smart "No Results" page

---

### 1.0.49
*(2016-12-01)*

#### Improvements
* Improved stemming feature (stemming based on current store locale)
### 1.0.48
*(2016-11-30)*

#### Improvements
* Custom search weight for products

---

### 1.0.47
*(2016-11-23)*

#### Fixed
* Fixed an issue with terms highlighter

---

### 1.0.46
*(2016-11-21)*

#### Improvements
* Fixed possible issue with swatches

---

### 1.0.45
*(2016-11-21)*

#### Improvements
* Compatibility with M 2.2.0

---

### 1.0.44
*(2016-11-17)*

#### Fixed
* Fixed an issue with search terms highlighting (char &)
* Issue with compare option on search results page

---

### 1.0.43
*(2016-10-31)*

#### Fixed
* Fixed an issue with one char wildcard
* Fixed an issue with terms highlighter
* Fixed an issue with number in attribute code
#### Features
* Added ability to generate sphinx configuration file for another sphinx server

---

### 1.0.40
*(2016-10-12)*

#### Fixed
* Fixed an issue with memory limits during indexation
* Fixed an issue with built-in search by very large description

---

### 1.0.38
*(2016-10-10)*

#### Fixed
* Fixed an issue with indexes translations

---

### 1.0.37
*(2016-10-04)*

---

### 1.0.36
*(2016-09-27)*

#### Improvements
* Ability to set custom search weight for products

---

### 1.0.34
*(2016-09-07)*

#### Improvements
* Prepare cms block during categories reindex

#### Fixed
* Fixed an issue with multistore results + added redirect via native store switcher controller

---

### 1.0.32
*(2016-08-19)*

#### Improvements
* Ability to search by blocks content in cms pages

#### Fixed
* Fixed an sphinx issue related with attributes

---

### 1.0.31
*(2016-08-09)*

#### Fixed
* Fixed an issue with sphinx index attributes

---
### 1.0.30
*(2016-08-06)*

#### Fixed
* Fixed an issue with category index (multi-store configuration)

---

### 1.0.28
*(2016-07-07)*

#### Improvements
* Added pager to wordpress blog search results

#### Fixed
* Fixed an issue related with creating temporary table on external database (external wordpress blog)

---

### 1.0.27
*(2016-07-06)*

#### Fixed
* Fixed an issue with displaying inline blocks, when search by cms pages
* Search sphinx with 2.1
* Fixed an issue with multi-store configuration

---
### 1.0.26
*(2016-06-29)*

#### Fixed
* Fixed an issue with applying results limit on category page

---

### 1.0.25
*(2016-06-29)*

#### Improvements
* Added additional exceptions for 404 to redirect

---

### 1.0.24
*(2016-06-24)*

#### Fixed
* Compatibility with Magento 2.1
* Fixed an issue with "Enable redirect from 404 to search results"

---
### 1.0.23
*(2016-06-14)*

#### Features
* Ability to reset sphinx daemon

---

### 1.0.22
*(2016-06-08)*

#### Fixed
* Fixed an issue with multistore results

---

### 1.0.21
*(2016-06-07)*

#### Improvements
* Added ability to search by Magefan Blog module

---

### 1.0.20
*(2016-05-24)*

#### Improvements
* Added special chars to sphinx configuration charset table

---

### 1.0.19
*(2016-05-19)*

#### Improvements
* Moved SphinxQL lib to module

#### Fixed
* Fixed an issue with synonyms

---

### 1.0.18
*(2016-05-17)*

#### Improvements
* Added additional file extension exceptions to 404 observer

#### Fixed
* Fixed an issue with min_word_len (search with dashes 0-1)

---

### 1.0.17
*(2016-05-16)*

#### Fixed
* SSU2-13 - Fix issue with synonyms

---

### 1.0.15, 1.0.16
*(2016-05-12)*

#### Improvements
* Improved performance of query builder

#### Fixed
* Fixed an sphinx query error after adding new attribute

---

### 1.0.14
*(2016-04-26)*

#### Fixed
* Fixed an issue with cronjobs

---

### 1.0.13
*(2016-04-20)*

#### Improvements
* Added console command for reindex search indexes

#### Fixed
* Fixed an issue with search by child product SKU
* Fixed css issue with active search tab, when HTML minification is enabled
* Fixed an issue with menu
* Fixed an issue with score builder for mysql engine

---

### 1.0.12
*(2016-04-07)*

#### Fixed
* Fixed an issue with area code (cli mode)
* Fixed an javascript error when html minification is enabled
* Fixed an issue with plural queries

---

### 1.0.11
*(2016-03-25)*

#### Improvements
* Integrated Mirasvit Knowledge Base

---

### 1.0.10
*(2016-03-17)*

#### Improvements
* Default index configuration
* Ability to search products only in active categories

#### Fixed
* Fixed possible issue with score sql query
* Fixed an issue with results limit

#### Documentation
* Description for Search only by active categories
* Updated installation steps

---

### 1.0.9
*(2016-03-09)*

#### Improvements
* Default index configuration
* Improved feature 404 to search
* Console commands for import/remove synonyms/stopwords
* Added default lemmatizer for EN, DE
* Improved sphinx configuration file
* Fallback engine for sphinx
* SSU2-9 -- Search by Mirasvit Blog MX
* i18n

#### Documentation
* Updated installation steps
* Information about synonyms and stopwords

#### Fixed
* Fixed an issue with stopwords import controller
* Added Symfony/Yaml to required packages
* Fixed an issue with importing synonyms and stopwords
* Fixed an issue with product list toolbar
* Fixed compatibility issue with Manadev_LayeredNavigation
* SSU2-8 -- mysql2 not found, when save product

---

### 1.0.8
*(2016-02-24)*

#### Fixed
* Fixed an issue with segmentation fault (PHP7) during reindex

---

### 1.0.7
*(2016-02-15)*

#### Fixed
* Fixed an issue with special chars in sphinx query (@)
* Fixed an issue with "Default Category" in search results for category search index
* Updated MCore version
* Formatting
* Fixed an issue with number of products at category pages (limit, offset)

---

### 1.0.6
*(2016-02-02)*

#### Fixed
* Fixed an issue with NOT cacheable block "search.google.sitelinks"
* Fixed an issue with upgrade script (synonyms and stopwords)
* SSU2-3 -- Fixed an issue with sh output in console (sh: searchd: command not found)

---

### 1.0.5
*(2016-01-31)*

#### Features
* SSU2-1 - Multi-store search results

#### Fixed
* Itegration tests

---


##  Search Autocomplete & Suggest [mirasvit/module-search-autocomplete]


## 1.2.3
*(2020-07-23)*

#### Fixed
* Replace new lines with space (missing products in fast mode results)

#### Improvements
* Hide search on search icon click

---


## 1.2.2
*(2020-07-08)*

#### Fixed
* wrong price data in fast mode
* show search term in fast mode empty results text
* display search results in line
* open result in new tab by image shift click
* product reviews backward compatibility
* misproportioned images
* added comment for incompatibility with Fast Mode Autocomplete
* getRating fix
* decrease fast mode reindex server load
* unknown column "score" issue

---


## 1.2.1
*(2020-05-14)*

#### Fixed
* Amasty Blog posts links
* remove get params from URLs in fast mode for some cases

---


## 1.2.0
*(2020-05-07)*

#### Fixed
* compatibility with maria db
* increase search autocomplete fast mode reindex speed
* remove search box JS from checkout page to avoid conflicts with 3rd party

---


## 1.1.109
*(2020-04-24)*

#### Fixed
* ">" mark display issue
* no word wrap on results title
* filter out suggested search terms with mysql entries

---


## 1.1.108
*(2020-04-07)*

#### Fixed
* decrease server load in the fast mode
* wrong category url
* wrong add to cart action in the fast mode
* fast mode product urls different from regular results
* 'category product' index display issue
* apply fast mode translations

---


## 1.1.107
*(2020-03-04)*

#### Fixed
* old search results are visible while new search is running
* wrong product url in fast mode
* in-stock product filter already applied issue

---


## 1.1.106
*(2020-02-12)*

#### Fixed
* Invalid attribute name: store_id on reindex
* Category product arrow styling issue
* Wrong product url on multi-store results when fast mode enabled

---

## 1.1.105
*(2020-01-02)*

#### Fixed
* Disable native search autocomplete

---

## 1.1.104
*(2019-12-18)*

#### Fixed
* Blackbird contentmanager index

---

## 1.1.103
*(2019-12-16)*

#### Fixed
* Add blackbird contentmanager index

#### Improvements
* Product search index refactoring

---

## 1.1.102
*(2019-12-09)*

#### Fixed
* Rating issue

---

## 1.1.101
*(2019-12-03)*

#### Fixed
* Wrong search results breadcrumbs
* Rating issue

---


## 1.1.100
*(2019-11-25)*

#### Improvements
* Use default magento price block for search autocomplete

---


## 1.1.99
*(2019-11-25)*

#### Fixed
* Unable to apply 'Add to Cart' translation
* Missing product rating
* Category index results wrong urls in fast mode
* CMS page index results wrong urls in fast mode

---


## 1.1.98
*(2019-11-14)*

#### Fixed
* Conflict with Webkul ShowPriceAfterlogin

---


## 1.1.97
*(2019-11-12)*

#### Fixed
* Search Button is not clickable when selecting the term from the Popular Suggestions

---


## 1.1.96
*(2019-08-08)*

#### Fixed
* Issue with wrong layer

---


## 1.1.95
*(2019-08-06)*

#### Fixed
* Prices issue for multistore setup in 'Fast Mode'
* Product thumbnails issue in 'Fast Mode'

---


## 1.1.94
*(2019-07-31)*

#### Fixed
* Issue with autocomplete visibility, even if cart popoup was showed

---


## 1.1.93
*(2019-07-30)*

#### Features
* Fishpig Glossary index support

#### Fixed
* native search form active state
* nested environment emulation error
* reindex speedup
* Blinking autocomplete box with multiple search forms on the same page

---


## 1.1.92
*(2019-06-19)*

#### Fixed
* Render html entities on server side
* KB article typo in template
* Remove .active when on autocomplete miss focus


## 1.1.91
*(2019-04-26)*

#### Fixed
* conflict with IE 10

#### Improvements
* Added message after fast mode enable


## 1.1.90
*(2019-04-24)*

#### Fixed
* Ensure search autocomplete Fast Mode config file on reindex
* Display Fast mode indexes in correct order
---


## 1.1.89
*(2019-04-12)*

#### Fixed
* incorrect module conflict declaration
---


## 1.1.88
*(2019-04-08)*

#### Fixed
* Similar results in multiple attribute indexes

---


## 1.1.87
*(2019-04-01)*

#### Fixed
* Translations for search in stores with fast mode

#### Improvements
* Improved weighting, ability to use advansed search options, synonyms, stopwords
---


## 1.1.86
*(2019-03-13)*

#### Fixed
* Search in stores with fast mode

---




##  Search Mysql [mirasvit/module-search-mysql]


## 1.0.39
*(2020-09-07)*

#### Fixed
* Mana_layerednavigationajax paging compatibility
* Indexer handler improvement

---


## 1.0.38
*(2020-04-13)*

#### Improvements
* Performance optimisations

---


## 1.0.37
*(2020-02-18)*

#### Fixed
* Magento 2.3.4 Compatibility (Tests)

---


## 1.0.36
*(2019-11-11)*

#### Fixed
* Ambiguous class declaration

---

## 1.0.35
*(2019-08-13)*

#### Fixed
* Marketplace compatibility

---

## 1.0.34
*(2019-08-06)*

#### Fixed
* Advanced search issue

---

## 1.0.33
*(2019-06-27)*

#### Fixed
* Stability

---

## 1.0.32
*(2019-06-27)*

#### Fixed
* Magento 2.3.2 compatibility

---
## 1.0.31
*(2019-05-08)*

#### Fixed
* eqp test fix

---

## 1.0.29
*(2018-02-25)*

#### Fixed
* DI compilation issue

---


## 1.0.28
*(2018-02-25)*

#### Fixed
* compatibility with Magento 2.1.14 EE

---


## 1.0.27
*(2018-12-10)*

#### Fixed
* M2.3 Index Switcher Error

---


## 1.0.26
*(2018-11-29)*

#### Fixed
* Compatibility with Magento 2.3

---


## 1.0.25
*(2018-10-16)*

#### Fixed
* "Instance for _  not found"

---


## 1.0.24
*(2018-10-12)*

#### Fixed
* Issue with undefined offset (built-in engine) 

---

## 1.0.23
*(2018-10-09)*

#### Improvements
* Performance

---

## 1.0.22
*(2018-09-26)*

#### Fixed
* Issue with offset 1

---


## 1.0.21
*(2018-09-21)*

#### Improvements
* Performance

---


## 1.0.20
*(2018-09-21)*

#### Fixed
* Processing multiselect attributes

---

## 1.0.19
*(2018-09-20)*

#### Fixed
* Issue during indexation

---


## 1.0.18
*(2018-09-20)*

#### Fixed
* Issue with reindex

---


## 1.0.17
*(2018-09-19)*

#### Fixed
* Compatibility with Magento 2.1

---

## 1.0.16
*(2018-09-12)*

#### Features
* Added functionality to use multiple Catalog Attribute index

---


## 1.0.15
*(2018-09-07)*

#### Fixed
* M2.1

---


## 1.0.14
*(2018-09-05)*

#### Improvements
* Compatibility with Magento 2.1

---


## 1.0.13
*(2018-01-30)*

#### Fixed
* Issue with searching by custom options

---



### 1.0.12
*(2017-11-20)*

#### Fixed
* Issue with search_weight column

---

### 1.0.11
*(2017-11-16)*

#### Fixed
* Issue with weight

---

### 1.0.10
*(2017-11-15)*

#### Fixed
* Issue with column search_weight

---

### 1.0.9
*(2017-11-13)*

#### Fixed
* Issue with index switcher

---

### 1.0.8
*(2017-09-27)*

#### Fixed
* Switcher

---

### 1.0.5
*(2017-09-26)*

#### Fixed
* Indexer switcher

---

### 1.0.4
*(2017-08-08)*

#### Fixed
* Issue with 'Not Words'
* Issue with stopwords

---

### 1.0.3
*(2017-05-04)*

#### Fixed
* Issue with empty query after applying stopwords

---

### 1.0.2
*(2017-04-13)*

#### Fixed
* Match logic

---

### 1.0.1
*(2017-04-10)*

#### Improvements
* Added suggestion provider for AdvancedSearch

------


##  Search Landing Page [mirasvit/module-search-landing]



### 1.0.10
*(2020-09-29)*

* Misspelled fixes

---

### 1.0.9
*(2020-03-05)* 

* Code improvements

## 1.0.8
*(2019-09-09)*

#### Fixed
* EQP

---


## 1.0.7
*(2019-06-04)*

#### Fixed
* Issue with different url keys for landing pages on different stores

---


## 1.0.6
*(2018-11-29)*

#### Fixed
* Compatibility with Magento 2.3

---


## 1.0.5
*(2018-10-10)*

#### Improvements
* Multistore

---


## 1.0.4
*(2018-04-12)*

#### Features
* Allow redirect by search term to url key 

---

### 1.0.3
*(2017-09-26)*

#### Fixed
* M2.2

---

### 1.0.2
*(2017-07-25)*

#### Fixed
* Issue with static tests

---

### 1.0.1
*(2017-05-03)*

#### Fixed
* Issue with UI

---

### 1.0.0
*(2017-05-03)*

* Initial release

------


##  Search Spell Correction [mirasvit/module-misspell]


## 1.0.37
*(2020-07-28)*

#### Improvements
* added comment for incompatibility with Fast Mode Autocomplete
* Speedup spell correction

#### Fixed
* misspell run on every new query
* improve misspell results
* fallback functionality improvements

---



### 1.0.36
*(2020-03-16)* 

* Code refactoring

## 1.0.35
*(2020-01-24)*

#### Improvements
* Improve perfomance with InnoDB tables

---


## 1.0.34
*(2019-10-08)*

#### Fixed
* Misspell split functionality
* Set misspell tables to MyISAM engine


---


## 1.0.33
*(2019-09-18)*

#### Fixed
* Spell correction don't return suggested result

---


## 1.0.32
*(2019-08-13)*

#### Fixed
* Marketplace compatibility

---


## 1.0.31
*(2019-05-27)*

#### Fixed
* Generators cannot return values using “return” 

---


## 1.0.29
*(2019-02-12)*

#### Fixed
* Allowed memory size error

---


## 1.0.28
*(2018-11-29)*

#### Fixed
* Compatibility with Magento 2.3

---


## 1.0.27
*(2018-10-01)*

#### Fixed
* ECHO

---



## 1.0.26
*(2018-09-19)*

#### Fixed
* Issue with first suggesting in some cases

---


## 1.0.24
*(2018-05-31)*

#### Fixed
* Issue with indexation cyrilic terms

---


## 1.0.23
*(2018-04-11)*

#### Fixed
* Issue with error 22003

---



## 1.0.22
*(2017-12-25)*

#### Improvements
* Integrated with Search Autocomplete
* Added Reindex validator

---

### 1.0.21
*(2017-12-13)*

#### Improvements
* Fallback search logic

---

### 1.0.20
*(2017-11-17)*

#### Fixed
* Issue with _cl table

---

### 1.0.19
*(2017-10-26)*

#### Fixed
* Possible issue with null values during indexation

---

### 1.0.18
*(2017-09-28)*

#### Fixed
* Issue with calculation number of results for suggested search phrase

---

### 1.0.17
*(2017-09-26)*

#### Fixed
* M2.2
* Issue with highlighting

---

### 1.0.16
*(2017-08-09)*

#### Fixed
* Issue with check zero result

---

### 1.0.15
*(2017-07-12)*

#### Fixed
* Issue with Changelog changes

---

### 1.0.14
*(2017-07-10)*

#### Improvements
* Fallback search logic

---

### 1.0.13
*(2017-06-20)*

#### Fixed
* Compatibility issue with Amasty Shopby

---

### 1.0.12
*(2017-05-10)*

#### Improvements
* Remove spell correction index if it disabled

---

### 1.0.11
*(2017-04-11)*

#### Improvements
* Switched to API interfaces

---

### 1.0.10
*(2017-02-20)*

#### Improvements
* Changed all string fuctions to mb_*

---


### 1.0.9
*(2017-02-03)*

#### Improvements
* Added Recurring setup script for check fulltext indices

---

### 1.0.8
*(2016-11-21)*

#### Improvements
* Compatibility with M 2.2.0

---

### 1.0.7
*(2016-06-24)*

#### Fixed
* Compatibility with Magento 2.1

---

### 1.0.6
*(2016-06-16)*

#### Fixed
* Fixed an issue with changing index mode for misspell index

---

### 1.0.5
*(2016-04-27)*

#### Improvements
* Improved extension performance
* i18n

#### Documentation
* Updated installation steps

---

### 1.0.4
*(2016-02-23)*

#### Fixed
* Fixed an issue with segmentation fault during reindex (PHP7)

---

### 1.0.3
*(2016-02-07)*

#### Documentation
* Added user manual


##  Search Report [mirasvit/module-search-report]



### 1.0.8
*(2020-03-16)* 

* Code improvements

## 1.0.6
*(2019-11-14)*

#### Fixed
* Conflict with Paysera payment methods

---

## 1.0.5
*(2018-08-21)*

#### Fixed
* Report settings do not work

---

## 1.0.4
*(2018-04-20)*

#### Fixed
* Issue with report by search terms

---

## 1.0.3
*(2018-02-14)*

#### Improvements
* Switched to new module-report version

#### Fixed
* Added details for secure cookies
added details for secure cookies

---

### 1.0.2
*(2017-09-26)*

#### Fixed
* M2.2

---

### 1.0.1
*(2017-07-21)*

#### Fixed
* Possible issue with "Circular dependency"

---
