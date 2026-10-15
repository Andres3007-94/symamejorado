<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-10-20 22:18:41 --> Config Class Initialized
INFO - 2025-10-20 22:18:41 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:18:41 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:18:41 --> Utf8 Class Initialized
INFO - 2025-10-20 22:18:41 --> URI Class Initialized
INFO - 2025-10-20 22:18:41 --> Router Class Initialized
INFO - 2025-10-20 22:18:41 --> Output Class Initialized
INFO - 2025-10-20 22:18:41 --> Security Class Initialized
DEBUG - 2025-10-20 22:18:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:18:41 --> CSRF cookie sent
INFO - 2025-10-20 22:18:41 --> Input Class Initialized
INFO - 2025-10-20 22:18:41 --> Language Class Initialized
INFO - 2025-10-20 22:18:41 --> Loader Class Initialized
INFO - 2025-10-20 22:18:41 --> Helper loaded: url_helper
INFO - 2025-10-20 22:18:41 --> Helper loaded: form_helper
INFO - 2025-10-20 22:18:41 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:18:41 --> Helper loaded: language_helper
INFO - 2025-10-20 22:18:41 --> Helper loaded: file_helper
INFO - 2025-10-20 22:18:41 --> Helper loaded: date_helper
INFO - 2025-10-20 22:18:41 --> Database Driver Class Initialized
INFO - 2025-10-20 22:18:41 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:18:41 --> Parser Class Initialized
INFO - 2025-10-20 22:18:41 --> Model "Site" initialized
INFO - 2025-10-20 22:18:41 --> Controller Class Initialized
INFO - 2025-10-20 22:18:41 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:18:41 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:18:41 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:18:41 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:18:41 --> Query error: Expression #9 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kaiman_sistema.sma_warehouses_products.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_warehouses`.*, `sma_warehouses_products`.`quantity`, `sma_warehouses_products`.`rack`
FROM `sma_warehouses`
LEFT JOIN `sma_warehouses_products` ON `sma_warehouses_products`.`warehouse_id`=`sma_warehouses`.`id`
WHERE `sma_warehouses_products`.`product_id` = '4503262'
GROUP BY `sma_warehouses`.`id`
ERROR - 2025-10-20 22:18:41 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/kaimanwatch/public_html/sistema/app/models/admin/Products_model.php 173
INFO - 2025-10-20 22:18:43 --> Config Class Initialized
INFO - 2025-10-20 22:18:43 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:18:43 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:18:43 --> Utf8 Class Initialized
INFO - 2025-10-20 22:18:43 --> URI Class Initialized
INFO - 2025-10-20 22:18:43 --> Router Class Initialized
INFO - 2025-10-20 22:18:43 --> Output Class Initialized
INFO - 2025-10-20 22:18:43 --> Security Class Initialized
DEBUG - 2025-10-20 22:18:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:18:43 --> CSRF cookie sent
INFO - 2025-10-20 22:18:43 --> Input Class Initialized
INFO - 2025-10-20 22:18:43 --> Language Class Initialized
INFO - 2025-10-20 22:18:43 --> Loader Class Initialized
INFO - 2025-10-20 22:18:43 --> Helper loaded: url_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: form_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: language_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: file_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: date_helper
INFO - 2025-10-20 22:18:43 --> Database Driver Class Initialized
INFO - 2025-10-20 22:18:43 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:18:43 --> Parser Class Initialized
INFO - 2025-10-20 22:18:43 --> Model "Site" initialized
INFO - 2025-10-20 22:18:43 --> Controller Class Initialized
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:18:43 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:18:43 --> Query error: Incorrect DATE value: '0000-00-00' - Invalid query: SELECT SUM(quantity_balance) as alert_num
FROM `sma_purchase_items`
WHERE `expiry` IS NOT NULL
AND `expiry` != '0000-00-00'
AND `expiry` < '2026-01-20'
INFO - 2025-10-20 22:18:43 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/header.php
ERROR - 2025-10-20 22:18:43 --> Could not find the language line "sync_quantity"
INFO - 2025-10-20 22:18:43 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/products/index.php
INFO - 2025-10-20 22:18:43 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/footer.php
INFO - 2025-10-20 22:18:43 --> Final output sent to browser
DEBUG - 2025-10-20 22:18:43 --> Total execution time: 0.0388
INFO - 2025-10-20 22:18:43 --> Config Class Initialized
INFO - 2025-10-20 22:18:43 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:18:43 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:18:43 --> Utf8 Class Initialized
INFO - 2025-10-20 22:18:43 --> Config Class Initialized
INFO - 2025-10-20 22:18:43 --> Hooks Class Initialized
INFO - 2025-10-20 22:18:43 --> URI Class Initialized
INFO - 2025-10-20 22:18:43 --> Router Class Initialized
DEBUG - 2025-10-20 22:18:43 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:18:43 --> Utf8 Class Initialized
INFO - 2025-10-20 22:18:43 --> URI Class Initialized
INFO - 2025-10-20 22:18:43 --> Output Class Initialized
INFO - 2025-10-20 22:18:43 --> Router Class Initialized
INFO - 2025-10-20 22:18:43 --> Security Class Initialized
INFO - 2025-10-20 22:18:43 --> Output Class Initialized
DEBUG - 2025-10-20 22:18:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:18:43 --> CSRF cookie sent
INFO - 2025-10-20 22:18:43 --> Input Class Initialized
INFO - 2025-10-20 22:18:43 --> Language Class Initialized
INFO - 2025-10-20 22:18:43 --> Security Class Initialized
DEBUG - 2025-10-20 22:18:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:18:43 --> CSRF cookie sent
INFO - 2025-10-20 22:18:43 --> Input Class Initialized
INFO - 2025-10-20 22:18:43 --> Language Class Initialized
INFO - 2025-10-20 22:18:43 --> Loader Class Initialized
INFO - 2025-10-20 22:18:43 --> Loader Class Initialized
INFO - 2025-10-20 22:18:43 --> Helper loaded: url_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: url_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: form_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: language_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: form_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: language_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: file_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: file_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: date_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: date_helper
INFO - 2025-10-20 22:18:43 --> Config Class Initialized
INFO - 2025-10-20 22:18:43 --> Hooks Class Initialized
INFO - 2025-10-20 22:18:43 --> Database Driver Class Initialized
INFO - 2025-10-20 22:18:43 --> Database Driver Class Initialized
DEBUG - 2025-10-20 22:18:43 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:18:43 --> Utf8 Class Initialized
INFO - 2025-10-20 22:18:43 --> URI Class Initialized
INFO - 2025-10-20 22:18:43 --> Router Class Initialized
INFO - 2025-10-20 22:18:43 --> Output Class Initialized
INFO - 2025-10-20 22:18:43 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:18:43 --> Parser Class Initialized
INFO - 2025-10-20 22:18:43 --> Security Class Initialized
DEBUG - 2025-10-20 22:18:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:18:43 --> CSRF cookie sent
INFO - 2025-10-20 22:18:43 --> CSRF token verified
INFO - 2025-10-20 22:18:43 --> Input Class Initialized
INFO - 2025-10-20 22:18:43 --> Language Class Initialized
INFO - 2025-10-20 22:18:43 --> Model "Site" initialized
INFO - 2025-10-20 22:18:43 --> Controller Class Initialized
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:18:43 --> Form Validation Class Initialized
INFO - 2025-10-20 22:18:43 --> Loader Class Initialized
INFO - 2025-10-20 22:18:43 --> Final output sent to browser
DEBUG - 2025-10-20 22:18:43 --> Total execution time: 0.0331
INFO - 2025-10-20 22:18:43 --> Helper loaded: url_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: form_helper
INFO - 2025-10-20 22:18:43 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:18:43 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: language_helper
INFO - 2025-10-20 22:18:43 --> Parser Class Initialized
INFO - 2025-10-20 22:18:43 --> Helper loaded: file_helper
INFO - 2025-10-20 22:18:43 --> Helper loaded: date_helper
INFO - 2025-10-20 22:18:43 --> Model "Site" initialized
INFO - 2025-10-20 22:18:43 --> Controller Class Initialized
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:18:43 --> Database Driver Class Initialized
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:18:43 --> Form Validation Class Initialized
INFO - 2025-10-20 22:18:43 --> Final output sent to browser
DEBUG - 2025-10-20 22:18:43 --> Total execution time: 0.0435
INFO - 2025-10-20 22:18:43 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:18:43 --> Parser Class Initialized
INFO - 2025-10-20 22:18:43 --> Model "Site" initialized
INFO - 2025-10-20 22:18:43 --> Controller Class Initialized
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:18:43 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:18:43 --> Form Validation Class Initialized
INFO - 2025-10-20 22:18:43 --> Final output sent to browser
DEBUG - 2025-10-20 22:18:43 --> Total execution time: 0.1100
INFO - 2025-10-20 22:18:45 --> Config Class Initialized
INFO - 2025-10-20 22:18:45 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:18:45 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:18:45 --> Utf8 Class Initialized
INFO - 2025-10-20 22:18:45 --> URI Class Initialized
INFO - 2025-10-20 22:18:45 --> Router Class Initialized
INFO - 2025-10-20 22:18:45 --> Output Class Initialized
INFO - 2025-10-20 22:18:45 --> Security Class Initialized
DEBUG - 2025-10-20 22:18:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:18:45 --> CSRF cookie sent
INFO - 2025-10-20 22:18:45 --> Input Class Initialized
INFO - 2025-10-20 22:18:45 --> Language Class Initialized
INFO - 2025-10-20 22:18:45 --> Loader Class Initialized
INFO - 2025-10-20 22:18:45 --> Helper loaded: url_helper
INFO - 2025-10-20 22:18:45 --> Helper loaded: form_helper
INFO - 2025-10-20 22:18:45 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:18:45 --> Helper loaded: language_helper
INFO - 2025-10-20 22:18:45 --> Helper loaded: file_helper
INFO - 2025-10-20 22:18:45 --> Helper loaded: date_helper
INFO - 2025-10-20 22:18:45 --> Database Driver Class Initialized
INFO - 2025-10-20 22:18:45 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:18:45 --> Parser Class Initialized
INFO - 2025-10-20 22:18:45 --> Model "Site" initialized
INFO - 2025-10-20 22:18:45 --> Controller Class Initialized
INFO - 2025-10-20 22:18:45 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:18:45 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:18:45 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:18:45 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:18:45 --> Query error: Expression #9 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kaiman_sistema.sma_warehouses_products.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_warehouses`.*, `sma_warehouses_products`.`quantity`, `sma_warehouses_products`.`rack`
FROM `sma_warehouses`
LEFT JOIN `sma_warehouses_products` ON `sma_warehouses_products`.`warehouse_id`=`sma_warehouses`.`id`
WHERE `sma_warehouses_products`.`product_id` = '4503262'
GROUP BY `sma_warehouses`.`id`
ERROR - 2025-10-20 22:18:45 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/kaimanwatch/public_html/sistema/app/models/admin/Products_model.php 173
INFO - 2025-10-20 22:18:51 --> Config Class Initialized
INFO - 2025-10-20 22:18:51 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:18:51 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:18:51 --> Utf8 Class Initialized
INFO - 2025-10-20 22:18:51 --> URI Class Initialized
INFO - 2025-10-20 22:18:51 --> Router Class Initialized
INFO - 2025-10-20 22:18:51 --> Output Class Initialized
INFO - 2025-10-20 22:18:51 --> Security Class Initialized
DEBUG - 2025-10-20 22:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:18:51 --> CSRF cookie sent
INFO - 2025-10-20 22:18:51 --> Input Class Initialized
INFO - 2025-10-20 22:18:51 --> Language Class Initialized
INFO - 2025-10-20 22:18:51 --> Loader Class Initialized
INFO - 2025-10-20 22:18:51 --> Helper loaded: url_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: form_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: language_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: file_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: date_helper
INFO - 2025-10-20 22:18:51 --> Database Driver Class Initialized
INFO - 2025-10-20 22:18:51 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:18:51 --> Parser Class Initialized
INFO - 2025-10-20 22:18:51 --> Model "Site" initialized
INFO - 2025-10-20 22:18:51 --> Controller Class Initialized
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:18:51 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:18:51 --> Query error: Incorrect DATE value: '0000-00-00' - Invalid query: SELECT SUM(quantity_balance) as alert_num
FROM `sma_purchase_items`
WHERE `expiry` IS NOT NULL
AND `expiry` != '0000-00-00'
AND `expiry` < '2026-01-20'
INFO - 2025-10-20 22:18:51 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/header.php
INFO - 2025-10-20 22:18:51 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/reports/sales.php
INFO - 2025-10-20 22:18:51 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/footer.php
INFO - 2025-10-20 22:18:51 --> Final output sent to browser
DEBUG - 2025-10-20 22:18:51 --> Total execution time: 0.0507
INFO - 2025-10-20 22:18:51 --> Config Class Initialized
INFO - 2025-10-20 22:18:51 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:18:51 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:18:51 --> Utf8 Class Initialized
INFO - 2025-10-20 22:18:51 --> URI Class Initialized
INFO - 2025-10-20 22:18:51 --> Config Class Initialized
INFO - 2025-10-20 22:18:51 --> Router Class Initialized
INFO - 2025-10-20 22:18:51 --> Hooks Class Initialized
INFO - 2025-10-20 22:18:51 --> Output Class Initialized
DEBUG - 2025-10-20 22:18:51 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:18:51 --> Utf8 Class Initialized
INFO - 2025-10-20 22:18:51 --> Security Class Initialized
INFO - 2025-10-20 22:18:51 --> URI Class Initialized
DEBUG - 2025-10-20 22:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:18:51 --> CSRF cookie sent
INFO - 2025-10-20 22:18:51 --> Input Class Initialized
INFO - 2025-10-20 22:18:51 --> Router Class Initialized
INFO - 2025-10-20 22:18:51 --> Language Class Initialized
INFO - 2025-10-20 22:18:51 --> Output Class Initialized
INFO - 2025-10-20 22:18:51 --> Security Class Initialized
DEBUG - 2025-10-20 22:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:18:51 --> CSRF cookie sent
INFO - 2025-10-20 22:18:51 --> Input Class Initialized
INFO - 2025-10-20 22:18:51 --> Language Class Initialized
INFO - 2025-10-20 22:18:51 --> Loader Class Initialized
INFO - 2025-10-20 22:18:51 --> Helper loaded: url_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: form_helper
INFO - 2025-10-20 22:18:51 --> Config Class Initialized
INFO - 2025-10-20 22:18:51 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:18:51 --> Hooks Class Initialized
INFO - 2025-10-20 22:18:51 --> Helper loaded: language_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: file_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: date_helper
DEBUG - 2025-10-20 22:18:51 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:18:51 --> Utf8 Class Initialized
INFO - 2025-10-20 22:18:51 --> URI Class Initialized
INFO - 2025-10-20 22:18:51 --> Loader Class Initialized
INFO - 2025-10-20 22:18:51 --> Helper loaded: url_helper
INFO - 2025-10-20 22:18:51 --> Router Class Initialized
INFO - 2025-10-20 22:18:51 --> Helper loaded: form_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: language_helper
INFO - 2025-10-20 22:18:51 --> Output Class Initialized
INFO - 2025-10-20 22:18:51 --> Database Driver Class Initialized
INFO - 2025-10-20 22:18:51 --> Helper loaded: file_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: date_helper
INFO - 2025-10-20 22:18:51 --> Security Class Initialized
DEBUG - 2025-10-20 22:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:18:51 --> CSRF cookie sent
INFO - 2025-10-20 22:18:51 --> CSRF token verified
INFO - 2025-10-20 22:18:51 --> Input Class Initialized
INFO - 2025-10-20 22:18:51 --> Language Class Initialized
INFO - 2025-10-20 22:18:51 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:18:51 --> Parser Class Initialized
INFO - 2025-10-20 22:18:51 --> Database Driver Class Initialized
INFO - 2025-10-20 22:18:51 --> Model "Site" initialized
INFO - 2025-10-20 22:18:51 --> Controller Class Initialized
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:18:51 --> Form Validation Class Initialized
INFO - 2025-10-20 22:18:51 --> Loader Class Initialized
INFO - 2025-10-20 22:18:51 --> Helper loaded: url_helper
INFO - 2025-10-20 22:18:51 --> Final output sent to browser
DEBUG - 2025-10-20 22:18:51 --> Total execution time: 0.0314
INFO - 2025-10-20 22:18:51 --> Helper loaded: form_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:18:51 --> Helper loaded: language_helper
INFO - 2025-10-20 22:18:51 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:18:51 --> Helper loaded: file_helper
INFO - 2025-10-20 22:18:51 --> Parser Class Initialized
INFO - 2025-10-20 22:18:51 --> Helper loaded: date_helper
INFO - 2025-10-20 22:18:51 --> Model "Site" initialized
INFO - 2025-10-20 22:18:51 --> Controller Class Initialized
INFO - 2025-10-20 22:18:51 --> Database Driver Class Initialized
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:18:51 --> Form Validation Class Initialized
INFO - 2025-10-20 22:18:51 --> Final output sent to browser
DEBUG - 2025-10-20 22:18:51 --> Total execution time: 0.0388
INFO - 2025-10-20 22:18:51 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:18:51 --> Parser Class Initialized
INFO - 2025-10-20 22:18:51 --> Model "Site" initialized
INFO - 2025-10-20 22:18:51 --> Controller Class Initialized
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:18:51 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:18:51 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:18:51 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kaiman_sistema.sma_sale_items.product_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___') as item_nane from sma_sale_items  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 100
ERROR - 2025-10-20 22:18:51 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kaiman_sistema.sma_sale_items.product_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___') as item_nane from sma_sale_items  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ERROR - 2025-10-20 22:18:51 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/kaimanwatch/public_html/sistema/app/libraries/Datatables.php 438
INFO - 2025-10-20 22:19:21 --> Config Class Initialized
INFO - 2025-10-20 22:19:21 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:19:21 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:19:21 --> Utf8 Class Initialized
INFO - 2025-10-20 22:19:21 --> URI Class Initialized
INFO - 2025-10-20 22:19:21 --> Router Class Initialized
INFO - 2025-10-20 22:19:21 --> Output Class Initialized
INFO - 2025-10-20 22:19:21 --> Config Class Initialized
INFO - 2025-10-20 22:19:21 --> Hooks Class Initialized
INFO - 2025-10-20 22:19:21 --> Security Class Initialized
DEBUG - 2025-10-20 22:19:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-10-20 22:19:21 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:19:21 --> CSRF cookie sent
INFO - 2025-10-20 22:19:21 --> Utf8 Class Initialized
INFO - 2025-10-20 22:19:21 --> Input Class Initialized
INFO - 2025-10-20 22:19:21 --> Language Class Initialized
INFO - 2025-10-20 22:19:21 --> URI Class Initialized
INFO - 2025-10-20 22:19:21 --> Router Class Initialized
INFO - 2025-10-20 22:19:21 --> Output Class Initialized
INFO - 2025-10-20 22:19:21 --> Security Class Initialized
DEBUG - 2025-10-20 22:19:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:19:21 --> CSRF cookie sent
INFO - 2025-10-20 22:19:21 --> Input Class Initialized
INFO - 2025-10-20 22:19:21 --> Language Class Initialized
INFO - 2025-10-20 22:19:21 --> Loader Class Initialized
INFO - 2025-10-20 22:19:21 --> Helper loaded: url_helper
INFO - 2025-10-20 22:19:21 --> Helper loaded: form_helper
INFO - 2025-10-20 22:19:21 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:19:21 --> Helper loaded: language_helper
INFO - 2025-10-20 22:19:21 --> Helper loaded: file_helper
INFO - 2025-10-20 22:19:21 --> Helper loaded: date_helper
INFO - 2025-10-20 22:19:21 --> Loader Class Initialized
INFO - 2025-10-20 22:19:21 --> Database Driver Class Initialized
INFO - 2025-10-20 22:19:21 --> Helper loaded: url_helper
INFO - 2025-10-20 22:19:21 --> Helper loaded: form_helper
INFO - 2025-10-20 22:19:21 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:19:21 --> Helper loaded: language_helper
INFO - 2025-10-20 22:19:21 --> Helper loaded: file_helper
INFO - 2025-10-20 22:19:21 --> Helper loaded: date_helper
INFO - 2025-10-20 22:19:21 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:19:21 --> Parser Class Initialized
INFO - 2025-10-20 22:19:21 --> Database Driver Class Initialized
INFO - 2025-10-20 22:19:21 --> Model "Site" initialized
INFO - 2025-10-20 22:19:21 --> Controller Class Initialized
INFO - 2025-10-20 22:19:21 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:19:21 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:19:21 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:19:21 --> Form Validation Class Initialized
INFO - 2025-10-20 22:19:21 --> Final output sent to browser
DEBUG - 2025-10-20 22:19:21 --> Total execution time: 0.0316
INFO - 2025-10-20 22:19:21 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:19:21 --> Parser Class Initialized
INFO - 2025-10-20 22:19:21 --> Model "Site" initialized
INFO - 2025-10-20 22:19:21 --> Controller Class Initialized
INFO - 2025-10-20 22:19:21 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:19:21 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:19:21 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:19:21 --> Form Validation Class Initialized
INFO - 2025-10-20 22:19:21 --> Final output sent to browser
DEBUG - 2025-10-20 22:19:21 --> Total execution time: 0.0432
INFO - 2025-10-20 22:19:52 --> Config Class Initialized
INFO - 2025-10-20 22:19:52 --> Hooks Class Initialized
INFO - 2025-10-20 22:19:52 --> Config Class Initialized
INFO - 2025-10-20 22:19:52 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:19:52 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:19:52 --> Utf8 Class Initialized
INFO - 2025-10-20 22:19:52 --> URI Class Initialized
DEBUG - 2025-10-20 22:19:52 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:19:52 --> Utf8 Class Initialized
INFO - 2025-10-20 22:19:52 --> URI Class Initialized
INFO - 2025-10-20 22:19:52 --> Router Class Initialized
INFO - 2025-10-20 22:19:52 --> Router Class Initialized
INFO - 2025-10-20 22:19:52 --> Output Class Initialized
INFO - 2025-10-20 22:19:52 --> Security Class Initialized
INFO - 2025-10-20 22:19:52 --> Output Class Initialized
DEBUG - 2025-10-20 22:19:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:19:52 --> CSRF cookie sent
INFO - 2025-10-20 22:19:52 --> Input Class Initialized
INFO - 2025-10-20 22:19:52 --> Security Class Initialized
INFO - 2025-10-20 22:19:52 --> Language Class Initialized
DEBUG - 2025-10-20 22:19:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:19:52 --> CSRF cookie sent
INFO - 2025-10-20 22:19:52 --> Input Class Initialized
INFO - 2025-10-20 22:19:52 --> Language Class Initialized
INFO - 2025-10-20 22:19:52 --> Loader Class Initialized
INFO - 2025-10-20 22:19:52 --> Helper loaded: url_helper
INFO - 2025-10-20 22:19:52 --> Loader Class Initialized
INFO - 2025-10-20 22:19:52 --> Helper loaded: form_helper
INFO - 2025-10-20 22:19:52 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:19:52 --> Helper loaded: url_helper
INFO - 2025-10-20 22:19:52 --> Helper loaded: language_helper
INFO - 2025-10-20 22:19:52 --> Helper loaded: file_helper
INFO - 2025-10-20 22:19:52 --> Helper loaded: form_helper
INFO - 2025-10-20 22:19:52 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:19:52 --> Helper loaded: date_helper
INFO - 2025-10-20 22:19:52 --> Helper loaded: language_helper
INFO - 2025-10-20 22:19:52 --> Helper loaded: file_helper
INFO - 2025-10-20 22:19:52 --> Helper loaded: date_helper
INFO - 2025-10-20 22:19:52 --> Database Driver Class Initialized
INFO - 2025-10-20 22:19:52 --> Database Driver Class Initialized
INFO - 2025-10-20 22:19:52 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:19:52 --> Parser Class Initialized
INFO - 2025-10-20 22:19:52 --> Model "Site" initialized
INFO - 2025-10-20 22:19:52 --> Controller Class Initialized
INFO - 2025-10-20 22:19:52 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:19:52 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:19:52 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:19:52 --> Form Validation Class Initialized
INFO - 2025-10-20 22:19:52 --> Final output sent to browser
DEBUG - 2025-10-20 22:19:52 --> Total execution time: 0.0337
INFO - 2025-10-20 22:19:52 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:19:52 --> Parser Class Initialized
INFO - 2025-10-20 22:19:52 --> Model "Site" initialized
INFO - 2025-10-20 22:19:52 --> Controller Class Initialized
INFO - 2025-10-20 22:19:52 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:19:52 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:19:52 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:19:52 --> Form Validation Class Initialized
INFO - 2025-10-20 22:19:52 --> Final output sent to browser
DEBUG - 2025-10-20 22:19:52 --> Total execution time: 0.0439
INFO - 2025-10-20 22:20:22 --> Config Class Initialized
INFO - 2025-10-20 22:20:22 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:20:22 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:20:22 --> Utf8 Class Initialized
INFO - 2025-10-20 22:20:22 --> URI Class Initialized
INFO - 2025-10-20 22:20:22 --> Config Class Initialized
INFO - 2025-10-20 22:20:22 --> Hooks Class Initialized
INFO - 2025-10-20 22:20:22 --> Router Class Initialized
INFO - 2025-10-20 22:20:22 --> Output Class Initialized
DEBUG - 2025-10-20 22:20:22 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:20:22 --> Utf8 Class Initialized
INFO - 2025-10-20 22:20:22 --> Security Class Initialized
DEBUG - 2025-10-20 22:20:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:20:22 --> URI Class Initialized
INFO - 2025-10-20 22:20:22 --> CSRF cookie sent
INFO - 2025-10-20 22:20:22 --> Input Class Initialized
INFO - 2025-10-20 22:20:22 --> Language Class Initialized
INFO - 2025-10-20 22:20:22 --> Router Class Initialized
INFO - 2025-10-20 22:20:22 --> Output Class Initialized
INFO - 2025-10-20 22:20:22 --> Security Class Initialized
DEBUG - 2025-10-20 22:20:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:20:22 --> CSRF cookie sent
INFO - 2025-10-20 22:20:22 --> Input Class Initialized
INFO - 2025-10-20 22:20:22 --> Language Class Initialized
INFO - 2025-10-20 22:20:22 --> Loader Class Initialized
INFO - 2025-10-20 22:20:22 --> Helper loaded: url_helper
INFO - 2025-10-20 22:20:22 --> Helper loaded: form_helper
INFO - 2025-10-20 22:20:22 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:20:22 --> Helper loaded: language_helper
INFO - 2025-10-20 22:20:22 --> Helper loaded: file_helper
INFO - 2025-10-20 22:20:22 --> Helper loaded: date_helper
INFO - 2025-10-20 22:20:22 --> Database Driver Class Initialized
INFO - 2025-10-20 22:20:22 --> Loader Class Initialized
INFO - 2025-10-20 22:20:22 --> Helper loaded: url_helper
INFO - 2025-10-20 22:20:22 --> Helper loaded: form_helper
INFO - 2025-10-20 22:20:22 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:20:22 --> Helper loaded: language_helper
INFO - 2025-10-20 22:20:22 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:20:22 --> Parser Class Initialized
INFO - 2025-10-20 22:20:22 --> Helper loaded: file_helper
INFO - 2025-10-20 22:20:22 --> Helper loaded: date_helper
INFO - 2025-10-20 22:20:22 --> Model "Site" initialized
INFO - 2025-10-20 22:20:22 --> Controller Class Initialized
INFO - 2025-10-20 22:20:22 --> Database Driver Class Initialized
INFO - 2025-10-20 22:20:22 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:20:22 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:20:22 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:20:22 --> Form Validation Class Initialized
INFO - 2025-10-20 22:20:22 --> Final output sent to browser
DEBUG - 2025-10-20 22:20:22 --> Total execution time: 0.0407
INFO - 2025-10-20 22:20:22 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:20:22 --> Parser Class Initialized
INFO - 2025-10-20 22:20:22 --> Model "Site" initialized
INFO - 2025-10-20 22:20:22 --> Controller Class Initialized
INFO - 2025-10-20 22:20:22 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:20:22 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:20:22 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:20:22 --> Form Validation Class Initialized
INFO - 2025-10-20 22:20:22 --> Final output sent to browser
DEBUG - 2025-10-20 22:20:22 --> Total execution time: 0.0487
INFO - 2025-10-20 22:20:52 --> Config Class Initialized
INFO - 2025-10-20 22:20:52 --> Hooks Class Initialized
INFO - 2025-10-20 22:20:52 --> Config Class Initialized
INFO - 2025-10-20 22:20:52 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:20:52 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:20:52 --> Utf8 Class Initialized
INFO - 2025-10-20 22:20:52 --> URI Class Initialized
DEBUG - 2025-10-20 22:20:52 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:20:52 --> Utf8 Class Initialized
INFO - 2025-10-20 22:20:52 --> URI Class Initialized
INFO - 2025-10-20 22:20:52 --> Router Class Initialized
INFO - 2025-10-20 22:20:52 --> Router Class Initialized
INFO - 2025-10-20 22:20:52 --> Output Class Initialized
INFO - 2025-10-20 22:20:52 --> Output Class Initialized
INFO - 2025-10-20 22:20:52 --> Security Class Initialized
DEBUG - 2025-10-20 22:20:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:20:52 --> Security Class Initialized
INFO - 2025-10-20 22:20:52 --> CSRF cookie sent
INFO - 2025-10-20 22:20:52 --> Input Class Initialized
INFO - 2025-10-20 22:20:52 --> Language Class Initialized
DEBUG - 2025-10-20 22:20:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:20:52 --> CSRF cookie sent
INFO - 2025-10-20 22:20:52 --> Input Class Initialized
INFO - 2025-10-20 22:20:52 --> Language Class Initialized
INFO - 2025-10-20 22:20:52 --> Loader Class Initialized
INFO - 2025-10-20 22:20:52 --> Helper loaded: url_helper
INFO - 2025-10-20 22:20:52 --> Loader Class Initialized
INFO - 2025-10-20 22:20:52 --> Helper loaded: form_helper
INFO - 2025-10-20 22:20:52 --> Helper loaded: url_helper
INFO - 2025-10-20 22:20:52 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:20:52 --> Helper loaded: language_helper
INFO - 2025-10-20 22:20:52 --> Helper loaded: file_helper
INFO - 2025-10-20 22:20:52 --> Helper loaded: form_helper
INFO - 2025-10-20 22:20:52 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:20:52 --> Helper loaded: language_helper
INFO - 2025-10-20 22:20:52 --> Helper loaded: date_helper
INFO - 2025-10-20 22:20:52 --> Helper loaded: file_helper
INFO - 2025-10-20 22:20:52 --> Helper loaded: date_helper
INFO - 2025-10-20 22:20:52 --> Database Driver Class Initialized
INFO - 2025-10-20 22:20:52 --> Database Driver Class Initialized
INFO - 2025-10-20 22:20:52 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:20:52 --> Parser Class Initialized
INFO - 2025-10-20 22:20:52 --> Model "Site" initialized
INFO - 2025-10-20 22:20:52 --> Controller Class Initialized
INFO - 2025-10-20 22:20:52 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:20:52 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:20:52 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:20:52 --> Form Validation Class Initialized
INFO - 2025-10-20 22:20:52 --> Final output sent to browser
DEBUG - 2025-10-20 22:20:52 --> Total execution time: 0.0366
INFO - 2025-10-20 22:20:52 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:20:52 --> Parser Class Initialized
INFO - 2025-10-20 22:20:52 --> Model "Site" initialized
INFO - 2025-10-20 22:20:52 --> Controller Class Initialized
INFO - 2025-10-20 22:20:52 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:20:52 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:20:52 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:20:52 --> Form Validation Class Initialized
INFO - 2025-10-20 22:20:52 --> Final output sent to browser
DEBUG - 2025-10-20 22:20:52 --> Total execution time: 0.0591
INFO - 2025-10-20 22:21:22 --> Config Class Initialized
INFO - 2025-10-20 22:21:22 --> Config Class Initialized
INFO - 2025-10-20 22:21:22 --> Hooks Class Initialized
INFO - 2025-10-20 22:21:22 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:21:22 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:21:22 --> Utf8 Class Initialized
DEBUG - 2025-10-20 22:21:22 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:21:22 --> Utf8 Class Initialized
INFO - 2025-10-20 22:21:22 --> URI Class Initialized
INFO - 2025-10-20 22:21:22 --> URI Class Initialized
INFO - 2025-10-20 22:21:22 --> Router Class Initialized
INFO - 2025-10-20 22:21:22 --> Output Class Initialized
INFO - 2025-10-20 22:21:22 --> Router Class Initialized
INFO - 2025-10-20 22:21:22 --> Security Class Initialized
INFO - 2025-10-20 22:21:22 --> Output Class Initialized
DEBUG - 2025-10-20 22:21:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:21:22 --> CSRF cookie sent
INFO - 2025-10-20 22:21:22 --> Input Class Initialized
INFO - 2025-10-20 22:21:22 --> Language Class Initialized
INFO - 2025-10-20 22:21:22 --> Security Class Initialized
DEBUG - 2025-10-20 22:21:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:21:22 --> CSRF cookie sent
INFO - 2025-10-20 22:21:22 --> Input Class Initialized
INFO - 2025-10-20 22:21:22 --> Language Class Initialized
INFO - 2025-10-20 22:21:22 --> Loader Class Initialized
INFO - 2025-10-20 22:21:22 --> Helper loaded: url_helper
INFO - 2025-10-20 22:21:22 --> Helper loaded: form_helper
INFO - 2025-10-20 22:21:22 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:21:22 --> Helper loaded: language_helper
INFO - 2025-10-20 22:21:22 --> Helper loaded: file_helper
INFO - 2025-10-20 22:21:22 --> Loader Class Initialized
INFO - 2025-10-20 22:21:22 --> Helper loaded: date_helper
INFO - 2025-10-20 22:21:22 --> Helper loaded: url_helper
INFO - 2025-10-20 22:21:22 --> Helper loaded: form_helper
INFO - 2025-10-20 22:21:22 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:21:22 --> Helper loaded: language_helper
INFO - 2025-10-20 22:21:22 --> Helper loaded: file_helper
INFO - 2025-10-20 22:21:22 --> Helper loaded: date_helper
INFO - 2025-10-20 22:21:22 --> Database Driver Class Initialized
INFO - 2025-10-20 22:21:22 --> Database Driver Class Initialized
INFO - 2025-10-20 22:21:22 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:21:22 --> Parser Class Initialized
INFO - 2025-10-20 22:21:22 --> Model "Site" initialized
INFO - 2025-10-20 22:21:22 --> Controller Class Initialized
INFO - 2025-10-20 22:21:22 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:21:22 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:21:22 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:21:22 --> Form Validation Class Initialized
INFO - 2025-10-20 22:21:22 --> Final output sent to browser
DEBUG - 2025-10-20 22:21:22 --> Total execution time: 0.1123
INFO - 2025-10-20 22:21:22 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:21:22 --> Parser Class Initialized
INFO - 2025-10-20 22:21:22 --> Model "Site" initialized
INFO - 2025-10-20 22:21:22 --> Controller Class Initialized
INFO - 2025-10-20 22:21:22 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:21:22 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:21:22 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:21:22 --> Form Validation Class Initialized
INFO - 2025-10-20 22:21:22 --> Final output sent to browser
DEBUG - 2025-10-20 22:21:22 --> Total execution time: 0.2040
INFO - 2025-10-20 22:21:52 --> Config Class Initialized
INFO - 2025-10-20 22:21:52 --> Config Class Initialized
INFO - 2025-10-20 22:21:52 --> Hooks Class Initialized
INFO - 2025-10-20 22:21:52 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:21:52 --> UTF-8 Support Enabled
DEBUG - 2025-10-20 22:21:52 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:21:52 --> Utf8 Class Initialized
INFO - 2025-10-20 22:21:52 --> Utf8 Class Initialized
INFO - 2025-10-20 22:21:52 --> URI Class Initialized
INFO - 2025-10-20 22:21:52 --> URI Class Initialized
INFO - 2025-10-20 22:21:52 --> Router Class Initialized
INFO - 2025-10-20 22:21:52 --> Router Class Initialized
INFO - 2025-10-20 22:21:52 --> Output Class Initialized
INFO - 2025-10-20 22:21:52 --> Output Class Initialized
INFO - 2025-10-20 22:21:52 --> Security Class Initialized
INFO - 2025-10-20 22:21:52 --> Security Class Initialized
DEBUG - 2025-10-20 22:21:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:21:52 --> CSRF cookie sent
INFO - 2025-10-20 22:21:52 --> Input Class Initialized
INFO - 2025-10-20 22:21:52 --> Language Class Initialized
DEBUG - 2025-10-20 22:21:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:21:52 --> CSRF cookie sent
INFO - 2025-10-20 22:21:52 --> Input Class Initialized
INFO - 2025-10-20 22:21:52 --> Language Class Initialized
INFO - 2025-10-20 22:21:52 --> Loader Class Initialized
INFO - 2025-10-20 22:21:52 --> Helper loaded: url_helper
INFO - 2025-10-20 22:21:52 --> Loader Class Initialized
INFO - 2025-10-20 22:21:52 --> Helper loaded: form_helper
INFO - 2025-10-20 22:21:52 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:21:52 --> Helper loaded: language_helper
INFO - 2025-10-20 22:21:52 --> Helper loaded: url_helper
INFO - 2025-10-20 22:21:52 --> Helper loaded: file_helper
INFO - 2025-10-20 22:21:52 --> Helper loaded: date_helper
INFO - 2025-10-20 22:21:52 --> Helper loaded: form_helper
INFO - 2025-10-20 22:21:52 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:21:52 --> Helper loaded: language_helper
INFO - 2025-10-20 22:21:52 --> Helper loaded: file_helper
INFO - 2025-10-20 22:21:52 --> Helper loaded: date_helper
INFO - 2025-10-20 22:21:52 --> Database Driver Class Initialized
INFO - 2025-10-20 22:21:52 --> Database Driver Class Initialized
INFO - 2025-10-20 22:21:52 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:21:52 --> Parser Class Initialized
INFO - 2025-10-20 22:21:52 --> Model "Site" initialized
INFO - 2025-10-20 22:21:52 --> Controller Class Initialized
INFO - 2025-10-20 22:21:52 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:21:52 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:21:52 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:21:52 --> Form Validation Class Initialized
INFO - 2025-10-20 22:21:52 --> Final output sent to browser
DEBUG - 2025-10-20 22:21:52 --> Total execution time: 0.0362
INFO - 2025-10-20 22:21:52 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:21:52 --> Parser Class Initialized
INFO - 2025-10-20 22:21:52 --> Model "Site" initialized
INFO - 2025-10-20 22:21:52 --> Controller Class Initialized
INFO - 2025-10-20 22:21:52 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:21:52 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:21:52 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:21:52 --> Form Validation Class Initialized
INFO - 2025-10-20 22:21:52 --> Final output sent to browser
DEBUG - 2025-10-20 22:21:52 --> Total execution time: 0.0746
INFO - 2025-10-20 22:22:22 --> Config Class Initialized
INFO - 2025-10-20 22:22:22 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:22:22 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:22 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:22 --> URI Class Initialized
INFO - 2025-10-20 22:22:22 --> Router Class Initialized
INFO - 2025-10-20 22:22:22 --> Output Class Initialized
INFO - 2025-10-20 22:22:22 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:22 --> CSRF cookie sent
INFO - 2025-10-20 22:22:22 --> Config Class Initialized
INFO - 2025-10-20 22:22:22 --> Input Class Initialized
INFO - 2025-10-20 22:22:22 --> Hooks Class Initialized
INFO - 2025-10-20 22:22:22 --> Language Class Initialized
DEBUG - 2025-10-20 22:22:22 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:22 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:22 --> URI Class Initialized
INFO - 2025-10-20 22:22:22 --> Router Class Initialized
INFO - 2025-10-20 22:22:22 --> Output Class Initialized
INFO - 2025-10-20 22:22:22 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:22 --> CSRF cookie sent
INFO - 2025-10-20 22:22:22 --> Input Class Initialized
INFO - 2025-10-20 22:22:22 --> Language Class Initialized
INFO - 2025-10-20 22:22:22 --> Loader Class Initialized
INFO - 2025-10-20 22:22:22 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:22 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:22 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:22 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:22 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:22 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:22 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:22 --> Loader Class Initialized
INFO - 2025-10-20 22:22:22 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:22 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:22 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:22 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:22 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:22 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:22 --> Parser Class Initialized
INFO - 2025-10-20 22:22:22 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:22 --> Model "Site" initialized
INFO - 2025-10-20 22:22:22 --> Controller Class Initialized
INFO - 2025-10-20 22:22:22 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:22 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:22 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:22 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:22:22 --> Form Validation Class Initialized
INFO - 2025-10-20 22:22:22 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:22 --> Total execution time: 0.0272
INFO - 2025-10-20 22:22:22 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:22 --> Parser Class Initialized
INFO - 2025-10-20 22:22:22 --> Model "Site" initialized
INFO - 2025-10-20 22:22:22 --> Controller Class Initialized
INFO - 2025-10-20 22:22:22 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:22 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:22 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:22:22 --> Form Validation Class Initialized
INFO - 2025-10-20 22:22:22 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:22 --> Total execution time: 0.0764
INFO - 2025-10-20 22:22:52 --> Config Class Initialized
INFO - 2025-10-20 22:22:52 --> Hooks Class Initialized
INFO - 2025-10-20 22:22:52 --> Config Class Initialized
INFO - 2025-10-20 22:22:52 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:22:52 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:52 --> Utf8 Class Initialized
DEBUG - 2025-10-20 22:22:52 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:52 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:52 --> URI Class Initialized
INFO - 2025-10-20 22:22:52 --> URI Class Initialized
INFO - 2025-10-20 22:22:52 --> Router Class Initialized
INFO - 2025-10-20 22:22:52 --> Router Class Initialized
INFO - 2025-10-20 22:22:52 --> Output Class Initialized
INFO - 2025-10-20 22:22:52 --> Output Class Initialized
INFO - 2025-10-20 22:22:52 --> Security Class Initialized
INFO - 2025-10-20 22:22:52 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:52 --> CSRF cookie sent
INFO - 2025-10-20 22:22:52 --> Input Class Initialized
INFO - 2025-10-20 22:22:52 --> Language Class Initialized
DEBUG - 2025-10-20 22:22:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:52 --> CSRF cookie sent
INFO - 2025-10-20 22:22:52 --> Input Class Initialized
INFO - 2025-10-20 22:22:52 --> Language Class Initialized
INFO - 2025-10-20 22:22:52 --> Loader Class Initialized
INFO - 2025-10-20 22:22:52 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:52 --> Loader Class Initialized
INFO - 2025-10-20 22:22:52 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:52 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:52 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:52 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:52 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:52 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:52 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:52 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:52 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:52 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:52 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:52 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:52 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:52 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:52 --> Parser Class Initialized
INFO - 2025-10-20 22:22:52 --> Model "Site" initialized
INFO - 2025-10-20 22:22:52 --> Controller Class Initialized
INFO - 2025-10-20 22:22:52 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:52 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:52 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:22:52 --> Form Validation Class Initialized
INFO - 2025-10-20 22:22:52 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:52 --> Total execution time: 0.0313
INFO - 2025-10-20 22:22:52 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:52 --> Parser Class Initialized
INFO - 2025-10-20 22:22:52 --> Model "Site" initialized
INFO - 2025-10-20 22:22:52 --> Controller Class Initialized
INFO - 2025-10-20 22:22:52 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:52 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:52 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:22:52 --> Form Validation Class Initialized
INFO - 2025-10-20 22:22:52 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:52 --> Total execution time: 0.0429
INFO - 2025-10-20 22:22:53 --> Config Class Initialized
INFO - 2025-10-20 22:22:53 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:22:53 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:53 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:53 --> URI Class Initialized
INFO - 2025-10-20 22:22:53 --> Router Class Initialized
INFO - 2025-10-20 22:22:53 --> Output Class Initialized
INFO - 2025-10-20 22:22:53 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:53 --> CSRF cookie sent
INFO - 2025-10-20 22:22:53 --> Input Class Initialized
INFO - 2025-10-20 22:22:53 --> Language Class Initialized
INFO - 2025-10-20 22:22:53 --> Loader Class Initialized
INFO - 2025-10-20 22:22:53 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:53 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:53 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:53 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:53 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:53 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:53 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:53 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:53 --> Parser Class Initialized
INFO - 2025-10-20 22:22:53 --> Model "Site" initialized
INFO - 2025-10-20 22:22:53 --> Controller Class Initialized
INFO - 2025-10-20 22:22:53 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:53 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:53 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:22:53 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:22:53 --> Query error: Incorrect DATE value: '0000-00-00' - Invalid query: SELECT SUM(quantity_balance) as alert_num
FROM `sma_purchase_items`
WHERE `expiry` IS NOT NULL
AND `expiry` != '0000-00-00'
AND `expiry` < '2026-01-20'
INFO - 2025-10-20 22:22:53 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/header.php
INFO - 2025-10-20 22:22:53 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/reports/sales.php
INFO - 2025-10-20 22:22:53 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/footer.php
INFO - 2025-10-20 22:22:53 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:53 --> Total execution time: 0.0622
INFO - 2025-10-20 22:22:54 --> Config Class Initialized
INFO - 2025-10-20 22:22:54 --> Config Class Initialized
INFO - 2025-10-20 22:22:54 --> Hooks Class Initialized
INFO - 2025-10-20 22:22:54 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:22:54 --> UTF-8 Support Enabled
DEBUG - 2025-10-20 22:22:54 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:54 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:54 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:54 --> URI Class Initialized
INFO - 2025-10-20 22:22:54 --> URI Class Initialized
INFO - 2025-10-20 22:22:54 --> Router Class Initialized
INFO - 2025-10-20 22:22:54 --> Router Class Initialized
INFO - 2025-10-20 22:22:54 --> Output Class Initialized
INFO - 2025-10-20 22:22:54 --> Output Class Initialized
INFO - 2025-10-20 22:22:54 --> Security Class Initialized
INFO - 2025-10-20 22:22:54 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-10-20 22:22:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:54 --> CSRF cookie sent
INFO - 2025-10-20 22:22:54 --> CSRF cookie sent
INFO - 2025-10-20 22:22:54 --> Input Class Initialized
INFO - 2025-10-20 22:22:54 --> Input Class Initialized
INFO - 2025-10-20 22:22:54 --> Language Class Initialized
INFO - 2025-10-20 22:22:54 --> Language Class Initialized
INFO - 2025-10-20 22:22:54 --> Loader Class Initialized
INFO - 2025-10-20 22:22:54 --> Loader Class Initialized
INFO - 2025-10-20 22:22:54 --> Config Class Initialized
INFO - 2025-10-20 22:22:54 --> Hooks Class Initialized
INFO - 2025-10-20 22:22:54 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: form_helper
DEBUG - 2025-10-20 22:22:54 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:54 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:54 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:54 --> URI Class Initialized
INFO - 2025-10-20 22:22:54 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:54 --> Router Class Initialized
INFO - 2025-10-20 22:22:54 --> Output Class Initialized
INFO - 2025-10-20 22:22:54 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:54 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:54 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:54 --> CSRF cookie sent
INFO - 2025-10-20 22:22:54 --> CSRF token verified
INFO - 2025-10-20 22:22:54 --> Input Class Initialized
INFO - 2025-10-20 22:22:54 --> Language Class Initialized
INFO - 2025-10-20 22:22:54 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:54 --> Parser Class Initialized
INFO - 2025-10-20 22:22:54 --> Model "Site" initialized
INFO - 2025-10-20 22:22:54 --> Controller Class Initialized
INFO - 2025-10-20 22:22:54 --> Loader Class Initialized
INFO - 2025-10-20 22:22:54 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:54 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:54 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:54 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:54 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:54 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:54 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:22:54 --> Form Validation Class Initialized
INFO - 2025-10-20 22:22:54 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:54 --> Total execution time: 0.0415
INFO - 2025-10-20 22:22:54 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:54 --> Parser Class Initialized
INFO - 2025-10-20 22:22:54 --> Model "Site" initialized
INFO - 2025-10-20 22:22:54 --> Controller Class Initialized
INFO - 2025-10-20 22:22:54 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:54 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:54 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:22:54 --> Form Validation Class Initialized
INFO - 2025-10-20 22:22:54 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:54 --> Total execution time: 0.0530
INFO - 2025-10-20 22:22:54 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:54 --> Parser Class Initialized
INFO - 2025-10-20 22:22:54 --> Model "Site" initialized
INFO - 2025-10-20 22:22:54 --> Controller Class Initialized
INFO - 2025-10-20 22:22:54 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:54 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:54 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:22:54 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:22:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kaiman_sistema.sma_sale_items.product_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___') as item_nane from sma_sale_items  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 100
ERROR - 2025-10-20 22:22:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kaiman_sistema.sma_sale_items.product_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___') as item_nane from sma_sale_items  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ERROR - 2025-10-20 22:22:54 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/kaimanwatch/public_html/sistema/app/libraries/Datatables.php 438
INFO - 2025-10-20 22:22:55 --> Config Class Initialized
INFO - 2025-10-20 22:22:55 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:22:55 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:55 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:55 --> URI Class Initialized
INFO - 2025-10-20 22:22:55 --> Router Class Initialized
INFO - 2025-10-20 22:22:55 --> Output Class Initialized
INFO - 2025-10-20 22:22:55 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:55 --> CSRF cookie sent
INFO - 2025-10-20 22:22:55 --> Input Class Initialized
INFO - 2025-10-20 22:22:55 --> Language Class Initialized
INFO - 2025-10-20 22:22:55 --> Loader Class Initialized
INFO - 2025-10-20 22:22:55 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:55 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:55 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:55 --> Parser Class Initialized
INFO - 2025-10-20 22:22:55 --> Model "Site" initialized
INFO - 2025-10-20 22:22:55 --> Controller Class Initialized
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:22:55 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:22:55 --> Query error: Incorrect DATE value: '0000-00-00' - Invalid query: SELECT SUM(quantity_balance) as alert_num
FROM `sma_purchase_items`
WHERE `expiry` IS NOT NULL
AND `expiry` != '0000-00-00'
AND `expiry` < '2026-01-20'
INFO - 2025-10-20 22:22:55 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/header.php
ERROR - 2025-10-20 22:22:55 --> Could not find the language line "sync_quantity"
INFO - 2025-10-20 22:22:55 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/products/index.php
INFO - 2025-10-20 22:22:55 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/footer.php
INFO - 2025-10-20 22:22:55 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:55 --> Total execution time: 0.0474
INFO - 2025-10-20 22:22:55 --> Config Class Initialized
INFO - 2025-10-20 22:22:55 --> Config Class Initialized
INFO - 2025-10-20 22:22:55 --> Hooks Class Initialized
INFO - 2025-10-20 22:22:55 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:22:55 --> UTF-8 Support Enabled
DEBUG - 2025-10-20 22:22:55 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:55 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:55 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:55 --> URI Class Initialized
INFO - 2025-10-20 22:22:55 --> URI Class Initialized
INFO - 2025-10-20 22:22:55 --> Router Class Initialized
INFO - 2025-10-20 22:22:55 --> Router Class Initialized
INFO - 2025-10-20 22:22:55 --> Output Class Initialized
INFO - 2025-10-20 22:22:55 --> Output Class Initialized
INFO - 2025-10-20 22:22:55 --> Security Class Initialized
INFO - 2025-10-20 22:22:55 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-10-20 22:22:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:55 --> CSRF cookie sent
INFO - 2025-10-20 22:22:55 --> CSRF cookie sent
INFO - 2025-10-20 22:22:55 --> Input Class Initialized
INFO - 2025-10-20 22:22:55 --> Input Class Initialized
INFO - 2025-10-20 22:22:55 --> Language Class Initialized
INFO - 2025-10-20 22:22:55 --> Language Class Initialized
INFO - 2025-10-20 22:22:55 --> Config Class Initialized
INFO - 2025-10-20 22:22:55 --> Hooks Class Initialized
INFO - 2025-10-20 22:22:55 --> Loader Class Initialized
INFO - 2025-10-20 22:22:55 --> Loader Class Initialized
DEBUG - 2025-10-20 22:22:55 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:55 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:55 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:55 --> URI Class Initialized
INFO - 2025-10-20 22:22:55 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:55 --> Router Class Initialized
INFO - 2025-10-20 22:22:55 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:55 --> Output Class Initialized
INFO - 2025-10-20 22:22:55 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:55 --> CSRF cookie sent
INFO - 2025-10-20 22:22:55 --> CSRF token verified
INFO - 2025-10-20 22:22:55 --> Input Class Initialized
INFO - 2025-10-20 22:22:55 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:55 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:55 --> Language Class Initialized
INFO - 2025-10-20 22:22:55 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:55 --> Parser Class Initialized
INFO - 2025-10-20 22:22:55 --> Model "Site" initialized
INFO - 2025-10-20 22:22:55 --> Controller Class Initialized
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:55 --> Loader Class Initialized
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:22:55 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:55 --> Form Validation Class Initialized
INFO - 2025-10-20 22:22:55 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:55 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:55 --> Total execution time: 0.0315
INFO - 2025-10-20 22:22:55 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:55 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:55 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:55 --> Parser Class Initialized
INFO - 2025-10-20 22:22:55 --> Model "Site" initialized
INFO - 2025-10-20 22:22:55 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:55 --> Controller Class Initialized
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:22:55 --> Form Validation Class Initialized
INFO - 2025-10-20 22:22:55 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:55 --> Total execution time: 0.0422
INFO - 2025-10-20 22:22:55 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:55 --> Parser Class Initialized
INFO - 2025-10-20 22:22:55 --> Model "Site" initialized
INFO - 2025-10-20 22:22:55 --> Controller Class Initialized
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:55 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:22:55 --> Form Validation Class Initialized
INFO - 2025-10-20 22:22:55 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:55 --> Total execution time: 0.1128
INFO - 2025-10-20 22:22:56 --> Config Class Initialized
INFO - 2025-10-20 22:22:56 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:22:56 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:56 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:56 --> URI Class Initialized
INFO - 2025-10-20 22:22:56 --> Router Class Initialized
INFO - 2025-10-20 22:22:56 --> Output Class Initialized
INFO - 2025-10-20 22:22:56 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:56 --> CSRF cookie sent
INFO - 2025-10-20 22:22:56 --> Input Class Initialized
INFO - 2025-10-20 22:22:56 --> Language Class Initialized
INFO - 2025-10-20 22:22:56 --> Loader Class Initialized
INFO - 2025-10-20 22:22:56 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:56 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:56 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:56 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:56 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:56 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:56 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:56 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:56 --> Parser Class Initialized
INFO - 2025-10-20 22:22:56 --> Model "Site" initialized
INFO - 2025-10-20 22:22:56 --> Controller Class Initialized
INFO - 2025-10-20 22:22:56 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:56 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:56 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:22:56 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:22:56 --> Query error: Expression #9 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kaiman_sistema.sma_warehouses_products.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_warehouses`.*, `sma_warehouses_products`.`quantity`, `sma_warehouses_products`.`rack`
FROM `sma_warehouses`
LEFT JOIN `sma_warehouses_products` ON `sma_warehouses_products`.`warehouse_id`=`sma_warehouses`.`id`
WHERE `sma_warehouses_products`.`product_id` = '4503272'
GROUP BY `sma_warehouses`.`id`
ERROR - 2025-10-20 22:22:56 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/kaimanwatch/public_html/sistema/app/models/admin/Products_model.php 173
INFO - 2025-10-20 22:22:58 --> Config Class Initialized
INFO - 2025-10-20 22:22:58 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:22:58 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:58 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:58 --> URI Class Initialized
INFO - 2025-10-20 22:22:58 --> Router Class Initialized
INFO - 2025-10-20 22:22:58 --> Output Class Initialized
INFO - 2025-10-20 22:22:58 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:58 --> CSRF cookie sent
INFO - 2025-10-20 22:22:58 --> Input Class Initialized
INFO - 2025-10-20 22:22:58 --> Language Class Initialized
INFO - 2025-10-20 22:22:58 --> Loader Class Initialized
INFO - 2025-10-20 22:22:58 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:58 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:58 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:58 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:58 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:58 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:58 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:58 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:58 --> Parser Class Initialized
INFO - 2025-10-20 22:22:58 --> Model "Site" initialized
INFO - 2025-10-20 22:22:58 --> Controller Class Initialized
INFO - 2025-10-20 22:22:58 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:58 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:58 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:22:58 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:22:58 --> Query error: Expression #9 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kaiman_sistema.sma_warehouses_products.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_warehouses`.*, `sma_warehouses_products`.`quantity`, `sma_warehouses_products`.`rack`
FROM `sma_warehouses`
LEFT JOIN `sma_warehouses_products` ON `sma_warehouses_products`.`warehouse_id`=`sma_warehouses`.`id`
WHERE `sma_warehouses_products`.`product_id` = '4503272'
GROUP BY `sma_warehouses`.`id`
ERROR - 2025-10-20 22:22:58 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/kaimanwatch/public_html/sistema/app/models/admin/Products_model.php 173
INFO - 2025-10-20 22:22:59 --> Config Class Initialized
INFO - 2025-10-20 22:22:59 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:22:59 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:22:59 --> Utf8 Class Initialized
INFO - 2025-10-20 22:22:59 --> URI Class Initialized
INFO - 2025-10-20 22:22:59 --> Router Class Initialized
INFO - 2025-10-20 22:22:59 --> Output Class Initialized
INFO - 2025-10-20 22:22:59 --> Security Class Initialized
DEBUG - 2025-10-20 22:22:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:22:59 --> CSRF cookie sent
INFO - 2025-10-20 22:22:59 --> Input Class Initialized
INFO - 2025-10-20 22:22:59 --> Language Class Initialized
INFO - 2025-10-20 22:22:59 --> Loader Class Initialized
INFO - 2025-10-20 22:22:59 --> Helper loaded: url_helper
INFO - 2025-10-20 22:22:59 --> Helper loaded: form_helper
INFO - 2025-10-20 22:22:59 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:22:59 --> Helper loaded: language_helper
INFO - 2025-10-20 22:22:59 --> Helper loaded: file_helper
INFO - 2025-10-20 22:22:59 --> Helper loaded: date_helper
INFO - 2025-10-20 22:22:59 --> Database Driver Class Initialized
INFO - 2025-10-20 22:22:59 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:22:59 --> Parser Class Initialized
INFO - 2025-10-20 22:22:59 --> Model "Site" initialized
INFO - 2025-10-20 22:22:59 --> Controller Class Initialized
INFO - 2025-10-20 22:22:59 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:22:59 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:22:59 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:22:59 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:22:59 --> Query error: Incorrect DATE value: '0000-00-00' - Invalid query: SELECT SUM(quantity_balance) as alert_num
FROM `sma_purchase_items`
WHERE `expiry` IS NOT NULL
AND `expiry` != '0000-00-00'
AND `expiry` < '2026-01-20'
INFO - 2025-10-20 22:22:59 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/header.php
ERROR - 2025-10-20 22:22:59 --> Could not find the language line "sync_quantity"
INFO - 2025-10-20 22:22:59 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/products/index.php
INFO - 2025-10-20 22:22:59 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/footer.php
INFO - 2025-10-20 22:22:59 --> Final output sent to browser
DEBUG - 2025-10-20 22:22:59 --> Total execution time: 0.0350
INFO - 2025-10-20 22:23:00 --> Config Class Initialized
INFO - 2025-10-20 22:23:00 --> Config Class Initialized
INFO - 2025-10-20 22:23:00 --> Hooks Class Initialized
INFO - 2025-10-20 22:23:00 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:23:00 --> UTF-8 Support Enabled
DEBUG - 2025-10-20 22:23:00 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:23:00 --> Utf8 Class Initialized
INFO - 2025-10-20 22:23:00 --> Utf8 Class Initialized
INFO - 2025-10-20 22:23:00 --> URI Class Initialized
INFO - 2025-10-20 22:23:00 --> URI Class Initialized
INFO - 2025-10-20 22:23:00 --> Router Class Initialized
INFO - 2025-10-20 22:23:00 --> Router Class Initialized
INFO - 2025-10-20 22:23:00 --> Output Class Initialized
INFO - 2025-10-20 22:23:00 --> Output Class Initialized
INFO - 2025-10-20 22:23:00 --> Security Class Initialized
INFO - 2025-10-20 22:23:00 --> Security Class Initialized
DEBUG - 2025-10-20 22:23:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-10-20 22:23:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:23:00 --> CSRF cookie sent
INFO - 2025-10-20 22:23:00 --> CSRF cookie sent
INFO - 2025-10-20 22:23:00 --> Input Class Initialized
INFO - 2025-10-20 22:23:00 --> Input Class Initialized
INFO - 2025-10-20 22:23:00 --> Language Class Initialized
INFO - 2025-10-20 22:23:00 --> Language Class Initialized
INFO - 2025-10-20 22:23:00 --> Loader Class Initialized
INFO - 2025-10-20 22:23:00 --> Loader Class Initialized
INFO - 2025-10-20 22:23:00 --> Helper loaded: url_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: url_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: form_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: language_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: form_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: file_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: language_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: date_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: file_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: date_helper
INFO - 2025-10-20 22:23:00 --> Database Driver Class Initialized
INFO - 2025-10-20 22:23:00 --> Config Class Initialized
INFO - 2025-10-20 22:23:00 --> Hooks Class Initialized
INFO - 2025-10-20 22:23:00 --> Database Driver Class Initialized
DEBUG - 2025-10-20 22:23:00 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:23:00 --> Utf8 Class Initialized
INFO - 2025-10-20 22:23:00 --> URI Class Initialized
INFO - 2025-10-20 22:23:00 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:23:00 --> Router Class Initialized
INFO - 2025-10-20 22:23:00 --> Parser Class Initialized
INFO - 2025-10-20 22:23:00 --> Output Class Initialized
INFO - 2025-10-20 22:23:00 --> Security Class Initialized
DEBUG - 2025-10-20 22:23:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:23:00 --> CSRF cookie sent
INFO - 2025-10-20 22:23:00 --> CSRF token verified
INFO - 2025-10-20 22:23:00 --> Input Class Initialized
INFO - 2025-10-20 22:23:00 --> Model "Site" initialized
INFO - 2025-10-20 22:23:00 --> Controller Class Initialized
INFO - 2025-10-20 22:23:00 --> Language Class Initialized
INFO - 2025-10-20 22:23:00 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:23:00 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:23:00 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:23:00 --> Form Validation Class Initialized
INFO - 2025-10-20 22:23:00 --> Final output sent to browser
DEBUG - 2025-10-20 22:23:00 --> Total execution time: 0.0297
INFO - 2025-10-20 22:23:00 --> Loader Class Initialized
INFO - 2025-10-20 22:23:00 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:23:00 --> Helper loaded: url_helper
INFO - 2025-10-20 22:23:00 --> Parser Class Initialized
INFO - 2025-10-20 22:23:00 --> Helper loaded: form_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: language_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: file_helper
INFO - 2025-10-20 22:23:00 --> Helper loaded: date_helper
INFO - 2025-10-20 22:23:00 --> Model "Site" initialized
INFO - 2025-10-20 22:23:00 --> Controller Class Initialized
INFO - 2025-10-20 22:23:00 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:23:00 --> Database Driver Class Initialized
INFO - 2025-10-20 22:23:00 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:23:00 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:23:00 --> Form Validation Class Initialized
INFO - 2025-10-20 22:23:00 --> Final output sent to browser
DEBUG - 2025-10-20 22:23:00 --> Total execution time: 0.0398
INFO - 2025-10-20 22:23:00 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:23:00 --> Parser Class Initialized
INFO - 2025-10-20 22:23:00 --> Model "Site" initialized
INFO - 2025-10-20 22:23:00 --> Controller Class Initialized
INFO - 2025-10-20 22:23:00 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:23:00 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:23:00 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:23:00 --> Form Validation Class Initialized
INFO - 2025-10-20 22:23:00 --> Final output sent to browser
DEBUG - 2025-10-20 22:23:00 --> Total execution time: 0.0969
INFO - 2025-10-20 22:23:26 --> Config Class Initialized
INFO - 2025-10-20 22:23:26 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:23:26 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:23:26 --> Utf8 Class Initialized
INFO - 2025-10-20 22:23:26 --> URI Class Initialized
INFO - 2025-10-20 22:23:26 --> Router Class Initialized
INFO - 2025-10-20 22:23:26 --> Output Class Initialized
INFO - 2025-10-20 22:23:26 --> Security Class Initialized
DEBUG - 2025-10-20 22:23:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:23:26 --> CSRF cookie sent
INFO - 2025-10-20 22:23:26 --> Input Class Initialized
INFO - 2025-10-20 22:23:26 --> Language Class Initialized
INFO - 2025-10-20 22:23:26 --> Loader Class Initialized
INFO - 2025-10-20 22:23:26 --> Helper loaded: url_helper
INFO - 2025-10-20 22:23:26 --> Helper loaded: form_helper
INFO - 2025-10-20 22:23:26 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:23:26 --> Helper loaded: language_helper
INFO - 2025-10-20 22:23:26 --> Helper loaded: file_helper
INFO - 2025-10-20 22:23:26 --> Helper loaded: date_helper
INFO - 2025-10-20 22:23:26 --> Database Driver Class Initialized
INFO - 2025-10-20 22:23:26 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:23:26 --> Parser Class Initialized
INFO - 2025-10-20 22:23:26 --> Model "Site" initialized
INFO - 2025-10-20 22:23:26 --> Controller Class Initialized
INFO - 2025-10-20 22:23:26 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:23:26 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:23:26 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:23:26 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:23:26 --> Query error: Expression #9 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kaiman_sistema.sma_warehouses_products.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_warehouses`.*, `sma_warehouses_products`.`quantity`, `sma_warehouses_products`.`rack`
FROM `sma_warehouses`
LEFT JOIN `sma_warehouses_products` ON `sma_warehouses_products`.`warehouse_id`=`sma_warehouses`.`id`
WHERE `sma_warehouses_products`.`product_id` = '4503263'
GROUP BY `sma_warehouses`.`id`
ERROR - 2025-10-20 22:23:26 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/kaimanwatch/public_html/sistema/app/models/admin/Products_model.php 173
INFO - 2025-10-20 22:24:19 --> Config Class Initialized
INFO - 2025-10-20 22:24:19 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:24:19 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:19 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:19 --> URI Class Initialized
INFO - 2025-10-20 22:24:19 --> Router Class Initialized
INFO - 2025-10-20 22:24:19 --> Output Class Initialized
INFO - 2025-10-20 22:24:19 --> Security Class Initialized
DEBUG - 2025-10-20 22:24:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:19 --> CSRF cookie sent
INFO - 2025-10-20 22:24:19 --> Input Class Initialized
INFO - 2025-10-20 22:24:19 --> Language Class Initialized
INFO - 2025-10-20 22:24:19 --> Loader Class Initialized
INFO - 2025-10-20 22:24:19 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:19 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:19 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:19 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:19 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:19 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:19 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:19 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:19 --> Parser Class Initialized
INFO - 2025-10-20 22:24:19 --> Model "Site" initialized
INFO - 2025-10-20 22:24:19 --> Controller Class Initialized
INFO - 2025-10-20 22:24:19 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:19 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:19 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:24:19 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:24:19 --> Query error: Expression #9 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kaiman_sistema.sma_warehouses_products_variants.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_product_variants`.*, `sma_warehouses`.`name` as `wh_name`, `sma_warehouses`.`id` as `warehouse_id`, `sma_warehouses_products_variants`.`quantity` as `wh_qty`
FROM `sma_product_variants`
LEFT JOIN `sma_warehouses_products_variants` ON `sma_warehouses_products_variants`.`option_id`=`sma_product_variants`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_warehouses_products_variants`.`warehouse_id`
WHERE `sma_product_variants`.`product_id` = '4503263'
AND `sma_warehouses_products_variants`.`quantity` IS NOT NULL
GROUP BY `sma_product_variants`.`id`, `sma_warehouses_products_variants`.`warehouse_id`
ORDER BY `sma_product_variants`.`id`
ERROR - 2025-10-20 22:24:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/kaimanwatch/public_html/sistema/app/models/admin/Products_model.php 67
INFO - 2025-10-20 22:24:21 --> Config Class Initialized
INFO - 2025-10-20 22:24:21 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:24:21 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:21 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:21 --> URI Class Initialized
INFO - 2025-10-20 22:24:21 --> Router Class Initialized
INFO - 2025-10-20 22:24:21 --> Output Class Initialized
INFO - 2025-10-20 22:24:21 --> Security Class Initialized
DEBUG - 2025-10-20 22:24:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:21 --> CSRF cookie sent
INFO - 2025-10-20 22:24:21 --> Input Class Initialized
INFO - 2025-10-20 22:24:21 --> Language Class Initialized
INFO - 2025-10-20 22:24:21 --> Loader Class Initialized
INFO - 2025-10-20 22:24:21 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:21 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:21 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:21 --> Parser Class Initialized
INFO - 2025-10-20 22:24:21 --> Model "Site" initialized
INFO - 2025-10-20 22:24:21 --> Controller Class Initialized
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:24:21 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:24:21 --> Query error: Incorrect DATE value: '0000-00-00' - Invalid query: SELECT SUM(quantity_balance) as alert_num
FROM `sma_purchase_items`
WHERE `expiry` IS NOT NULL
AND `expiry` != '0000-00-00'
AND `expiry` < '2026-01-20'
INFO - 2025-10-20 22:24:21 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/header.php
ERROR - 2025-10-20 22:24:21 --> Could not find the language line "sync_quantity"
INFO - 2025-10-20 22:24:21 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/products/index.php
INFO - 2025-10-20 22:24:21 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/footer.php
INFO - 2025-10-20 22:24:21 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:21 --> Total execution time: 0.0387
INFO - 2025-10-20 22:24:21 --> Config Class Initialized
INFO - 2025-10-20 22:24:21 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:24:21 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:21 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:21 --> URI Class Initialized
INFO - 2025-10-20 22:24:21 --> Router Class Initialized
INFO - 2025-10-20 22:24:21 --> Output Class Initialized
INFO - 2025-10-20 22:24:21 --> Security Class Initialized
DEBUG - 2025-10-20 22:24:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:21 --> CSRF cookie sent
INFO - 2025-10-20 22:24:21 --> Input Class Initialized
INFO - 2025-10-20 22:24:21 --> Config Class Initialized
INFO - 2025-10-20 22:24:21 --> Language Class Initialized
INFO - 2025-10-20 22:24:21 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:24:21 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:21 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:21 --> URI Class Initialized
INFO - 2025-10-20 22:24:21 --> Loader Class Initialized
INFO - 2025-10-20 22:24:21 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:21 --> Router Class Initialized
INFO - 2025-10-20 22:24:21 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:21 --> Output Class Initialized
INFO - 2025-10-20 22:24:21 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:21 --> Security Class Initialized
INFO - 2025-10-20 22:24:21 --> Helper loaded: date_helper
DEBUG - 2025-10-20 22:24:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:21 --> CSRF cookie sent
INFO - 2025-10-20 22:24:21 --> Input Class Initialized
INFO - 2025-10-20 22:24:21 --> Language Class Initialized
INFO - 2025-10-20 22:24:21 --> Config Class Initialized
INFO - 2025-10-20 22:24:21 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:24:21 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:21 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:21 --> URI Class Initialized
INFO - 2025-10-20 22:24:21 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:21 --> Router Class Initialized
INFO - 2025-10-20 22:24:21 --> Output Class Initialized
INFO - 2025-10-20 22:24:21 --> Security Class Initialized
INFO - 2025-10-20 22:24:21 --> Session: Class initialized using 'database' driver.
DEBUG - 2025-10-20 22:24:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:21 --> Parser Class Initialized
INFO - 2025-10-20 22:24:21 --> CSRF cookie sent
INFO - 2025-10-20 22:24:21 --> CSRF token verified
INFO - 2025-10-20 22:24:21 --> Input Class Initialized
INFO - 2025-10-20 22:24:21 --> Language Class Initialized
INFO - 2025-10-20 22:24:21 --> Loader Class Initialized
INFO - 2025-10-20 22:24:21 --> Model "Site" initialized
INFO - 2025-10-20 22:24:21 --> Controller Class Initialized
INFO - 2025-10-20 22:24:21 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:21 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:21 --> Loader Class Initialized
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:24:21 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:21 --> Form Validation Class Initialized
INFO - 2025-10-20 22:24:21 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:21 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:21 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:21 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:21 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:21 --> Total execution time: 0.0315
INFO - 2025-10-20 22:24:21 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:21 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:21 --> Parser Class Initialized
INFO - 2025-10-20 22:24:21 --> Model "Site" initialized
INFO - 2025-10-20 22:24:21 --> Controller Class Initialized
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:24:21 --> Form Validation Class Initialized
INFO - 2025-10-20 22:24:21 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:21 --> Total execution time: 0.0375
INFO - 2025-10-20 22:24:21 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:21 --> Parser Class Initialized
INFO - 2025-10-20 22:24:21 --> Model "Site" initialized
INFO - 2025-10-20 22:24:21 --> Controller Class Initialized
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:21 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:24:21 --> Form Validation Class Initialized
INFO - 2025-10-20 22:24:21 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:21 --> Total execution time: 0.1014
INFO - 2025-10-20 22:24:23 --> Config Class Initialized
INFO - 2025-10-20 22:24:23 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:24:23 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:23 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:23 --> URI Class Initialized
INFO - 2025-10-20 22:24:23 --> Router Class Initialized
INFO - 2025-10-20 22:24:23 --> Output Class Initialized
INFO - 2025-10-20 22:24:23 --> Security Class Initialized
DEBUG - 2025-10-20 22:24:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:23 --> CSRF cookie sent
INFO - 2025-10-20 22:24:23 --> Input Class Initialized
INFO - 2025-10-20 22:24:23 --> Language Class Initialized
INFO - 2025-10-20 22:24:23 --> Loader Class Initialized
INFO - 2025-10-20 22:24:23 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:23 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:23 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:23 --> Parser Class Initialized
INFO - 2025-10-20 22:24:23 --> Model "Site" initialized
INFO - 2025-10-20 22:24:23 --> Controller Class Initialized
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:24:23 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:24:23 --> Query error: Incorrect DATE value: '0000-00-00' - Invalid query: SELECT SUM(quantity_balance) as alert_num
FROM `sma_purchase_items`
WHERE `expiry` IS NOT NULL
AND `expiry` != '0000-00-00'
AND `expiry` < '2026-01-20'
INFO - 2025-10-20 22:24:23 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/header.php
ERROR - 2025-10-20 22:24:23 --> Could not find the language line "sync_quantity"
INFO - 2025-10-20 22:24:23 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/products/index.php
INFO - 2025-10-20 22:24:23 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/footer.php
INFO - 2025-10-20 22:24:23 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:23 --> Total execution time: 0.0341
INFO - 2025-10-20 22:24:23 --> Config Class Initialized
INFO - 2025-10-20 22:24:23 --> Config Class Initialized
INFO - 2025-10-20 22:24:23 --> Hooks Class Initialized
INFO - 2025-10-20 22:24:23 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:24:23 --> UTF-8 Support Enabled
DEBUG - 2025-10-20 22:24:23 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:23 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:23 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:23 --> URI Class Initialized
INFO - 2025-10-20 22:24:23 --> URI Class Initialized
INFO - 2025-10-20 22:24:23 --> Router Class Initialized
INFO - 2025-10-20 22:24:23 --> Router Class Initialized
INFO - 2025-10-20 22:24:23 --> Output Class Initialized
INFO - 2025-10-20 22:24:23 --> Output Class Initialized
INFO - 2025-10-20 22:24:23 --> Security Class Initialized
INFO - 2025-10-20 22:24:23 --> Security Class Initialized
DEBUG - 2025-10-20 22:24:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:23 --> CSRF cookie sent
INFO - 2025-10-20 22:24:23 --> Input Class Initialized
DEBUG - 2025-10-20 22:24:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:23 --> Language Class Initialized
INFO - 2025-10-20 22:24:23 --> CSRF cookie sent
INFO - 2025-10-20 22:24:23 --> Input Class Initialized
INFO - 2025-10-20 22:24:23 --> Language Class Initialized
INFO - 2025-10-20 22:24:23 --> Config Class Initialized
INFO - 2025-10-20 22:24:23 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:24:23 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:23 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:23 --> URI Class Initialized
INFO - 2025-10-20 22:24:23 --> Router Class Initialized
INFO - 2025-10-20 22:24:23 --> Output Class Initialized
INFO - 2025-10-20 22:24:23 --> Security Class Initialized
DEBUG - 2025-10-20 22:24:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:23 --> CSRF cookie sent
INFO - 2025-10-20 22:24:23 --> CSRF token verified
INFO - 2025-10-20 22:24:23 --> Input Class Initialized
INFO - 2025-10-20 22:24:23 --> Loader Class Initialized
INFO - 2025-10-20 22:24:23 --> Language Class Initialized
INFO - 2025-10-20 22:24:23 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:23 --> Loader Class Initialized
INFO - 2025-10-20 22:24:23 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:23 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:23 --> Loader Class Initialized
INFO - 2025-10-20 22:24:23 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:23 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:23 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:23 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:23 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:23 --> Parser Class Initialized
INFO - 2025-10-20 22:24:23 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:23 --> Model "Site" initialized
INFO - 2025-10-20 22:24:23 --> Controller Class Initialized
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:24:23 --> Form Validation Class Initialized
INFO - 2025-10-20 22:24:23 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:23 --> Total execution time: 0.0305
INFO - 2025-10-20 22:24:23 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:23 --> Parser Class Initialized
INFO - 2025-10-20 22:24:23 --> Model "Site" initialized
INFO - 2025-10-20 22:24:23 --> Controller Class Initialized
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:24:23 --> Form Validation Class Initialized
INFO - 2025-10-20 22:24:23 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:23 --> Total execution time: 0.0433
INFO - 2025-10-20 22:24:23 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:23 --> Parser Class Initialized
INFO - 2025-10-20 22:24:23 --> Model "Site" initialized
INFO - 2025-10-20 22:24:23 --> Controller Class Initialized
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:23 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:24:23 --> Form Validation Class Initialized
INFO - 2025-10-20 22:24:23 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:23 --> Total execution time: 0.1127
INFO - 2025-10-20 22:24:29 --> Config Class Initialized
INFO - 2025-10-20 22:24:29 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:24:29 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:29 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:29 --> URI Class Initialized
INFO - 2025-10-20 22:24:29 --> Router Class Initialized
INFO - 2025-10-20 22:24:29 --> Output Class Initialized
INFO - 2025-10-20 22:24:29 --> Security Class Initialized
DEBUG - 2025-10-20 22:24:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:29 --> CSRF cookie sent
INFO - 2025-10-20 22:24:29 --> Input Class Initialized
INFO - 2025-10-20 22:24:29 --> Language Class Initialized
INFO - 2025-10-20 22:24:29 --> Loader Class Initialized
INFO - 2025-10-20 22:24:29 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:29 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:29 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:29 --> Parser Class Initialized
INFO - 2025-10-20 22:24:29 --> Model "Site" initialized
INFO - 2025-10-20 22:24:29 --> Controller Class Initialized
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:24:29 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:24:29 --> Query error: Incorrect DATE value: '0000-00-00' - Invalid query: SELECT SUM(quantity_balance) as alert_num
FROM `sma_purchase_items`
WHERE `expiry` IS NOT NULL
AND `expiry` != '0000-00-00'
AND `expiry` < '2026-01-20'
INFO - 2025-10-20 22:24:29 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/header.php
ERROR - 2025-10-20 22:24:29 --> Could not find the language line "sync_quantity"
INFO - 2025-10-20 22:24:29 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/products/index.php
INFO - 2025-10-20 22:24:29 --> File loaded: /home/kaimanwatch/public_html/sistema/themes/default/admin/views/footer.php
INFO - 2025-10-20 22:24:29 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:29 --> Total execution time: 0.0324
INFO - 2025-10-20 22:24:29 --> Config Class Initialized
INFO - 2025-10-20 22:24:29 --> Hooks Class Initialized
INFO - 2025-10-20 22:24:29 --> Config Class Initialized
INFO - 2025-10-20 22:24:29 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:24:29 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:29 --> Utf8 Class Initialized
DEBUG - 2025-10-20 22:24:29 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:29 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:29 --> URI Class Initialized
INFO - 2025-10-20 22:24:29 --> URI Class Initialized
INFO - 2025-10-20 22:24:29 --> Router Class Initialized
INFO - 2025-10-20 22:24:29 --> Router Class Initialized
INFO - 2025-10-20 22:24:29 --> Output Class Initialized
INFO - 2025-10-20 22:24:29 --> Security Class Initialized
INFO - 2025-10-20 22:24:29 --> Output Class Initialized
DEBUG - 2025-10-20 22:24:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:29 --> CSRF cookie sent
INFO - 2025-10-20 22:24:29 --> Security Class Initialized
INFO - 2025-10-20 22:24:29 --> Input Class Initialized
DEBUG - 2025-10-20 22:24:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:29 --> Language Class Initialized
INFO - 2025-10-20 22:24:29 --> CSRF cookie sent
INFO - 2025-10-20 22:24:29 --> Input Class Initialized
INFO - 2025-10-20 22:24:29 --> Language Class Initialized
INFO - 2025-10-20 22:24:29 --> Config Class Initialized
INFO - 2025-10-20 22:24:29 --> Hooks Class Initialized
INFO - 2025-10-20 22:24:29 --> Loader Class Initialized
INFO - 2025-10-20 22:24:29 --> Loader Class Initialized
DEBUG - 2025-10-20 22:24:29 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:29 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:29 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:29 --> URI Class Initialized
INFO - 2025-10-20 22:24:29 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:29 --> Router Class Initialized
INFO - 2025-10-20 22:24:29 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:29 --> Output Class Initialized
INFO - 2025-10-20 22:24:29 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:29 --> Security Class Initialized
DEBUG - 2025-10-20 22:24:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:29 --> CSRF cookie sent
INFO - 2025-10-20 22:24:29 --> CSRF token verified
INFO - 2025-10-20 22:24:29 --> Input Class Initialized
INFO - 2025-10-20 22:24:29 --> Language Class Initialized
INFO - 2025-10-20 22:24:29 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:29 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:29 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:29 --> Parser Class Initialized
INFO - 2025-10-20 22:24:29 --> Loader Class Initialized
INFO - 2025-10-20 22:24:29 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:29 --> Model "Site" initialized
INFO - 2025-10-20 22:24:29 --> Controller Class Initialized
INFO - 2025-10-20 22:24:29 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:29 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:29 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:24:29 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:29 --> Form Validation Class Initialized
INFO - 2025-10-20 22:24:29 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:29 --> Total execution time: 0.0302
INFO - 2025-10-20 22:24:29 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:29 --> Parser Class Initialized
INFO - 2025-10-20 22:24:29 --> Model "Site" initialized
INFO - 2025-10-20 22:24:29 --> Controller Class Initialized
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/admin/reports_lang.php
INFO - 2025-10-20 22:24:29 --> Form Validation Class Initialized
INFO - 2025-10-20 22:24:29 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:29 --> Total execution time: 0.0444
INFO - 2025-10-20 22:24:29 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:29 --> Parser Class Initialized
INFO - 2025-10-20 22:24:29 --> Model "Site" initialized
INFO - 2025-10-20 22:24:29 --> Controller Class Initialized
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:29 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:24:29 --> Form Validation Class Initialized
INFO - 2025-10-20 22:24:29 --> Final output sent to browser
DEBUG - 2025-10-20 22:24:29 --> Total execution time: 0.1060
INFO - 2025-10-20 22:24:31 --> Config Class Initialized
INFO - 2025-10-20 22:24:31 --> Hooks Class Initialized
DEBUG - 2025-10-20 22:24:31 --> UTF-8 Support Enabled
INFO - 2025-10-20 22:24:31 --> Utf8 Class Initialized
INFO - 2025-10-20 22:24:31 --> URI Class Initialized
INFO - 2025-10-20 22:24:31 --> Router Class Initialized
INFO - 2025-10-20 22:24:31 --> Output Class Initialized
INFO - 2025-10-20 22:24:31 --> Security Class Initialized
DEBUG - 2025-10-20 22:24:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-10-20 22:24:31 --> CSRF cookie sent
INFO - 2025-10-20 22:24:31 --> Input Class Initialized
INFO - 2025-10-20 22:24:31 --> Language Class Initialized
INFO - 2025-10-20 22:24:31 --> Loader Class Initialized
INFO - 2025-10-20 22:24:31 --> Helper loaded: url_helper
INFO - 2025-10-20 22:24:31 --> Helper loaded: form_helper
INFO - 2025-10-20 22:24:31 --> Helper loaded: cookie_helper
INFO - 2025-10-20 22:24:31 --> Helper loaded: language_helper
INFO - 2025-10-20 22:24:31 --> Helper loaded: file_helper
INFO - 2025-10-20 22:24:31 --> Helper loaded: date_helper
INFO - 2025-10-20 22:24:31 --> Database Driver Class Initialized
INFO - 2025-10-20 22:24:31 --> Session: Class initialized using 'database' driver.
INFO - 2025-10-20 22:24:31 --> Parser Class Initialized
INFO - 2025-10-20 22:24:31 --> Model "Site" initialized
INFO - 2025-10-20 22:24:31 --> Controller Class Initialized
INFO - 2025-10-20 22:24:31 --> Language file loaded: language/spanish/admin/sma_lang.php
INFO - 2025-10-20 22:24:31 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2025-10-20 22:24:31 --> Language file loaded: language/spanish/admin/products_lang.php
INFO - 2025-10-20 22:24:31 --> Form Validation Class Initialized
ERROR - 2025-10-20 22:24:31 --> Query error: Expression #9 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kaiman_sistema.sma_warehouses_products_variants.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_product_variants`.*, `sma_warehouses`.`name` as `wh_name`, `sma_warehouses`.`id` as `warehouse_id`, `sma_warehouses_products_variants`.`quantity` as `wh_qty`
FROM `sma_product_variants`
LEFT JOIN `sma_warehouses_products_variants` ON `sma_warehouses_products_variants`.`option_id`=`sma_product_variants`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_warehouses_products_variants`.`warehouse_id`
WHERE `sma_product_variants`.`product_id` = '4503272'
AND `sma_warehouses_products_variants`.`quantity` IS NOT NULL
GROUP BY `sma_product_variants`.`id`, `sma_warehouses_products_variants`.`warehouse_id`
ORDER BY `sma_product_variants`.`id`
ERROR - 2025-10-20 22:24:31 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/kaimanwatch/public_html/sistema/app/models/admin/Products_model.php 67
