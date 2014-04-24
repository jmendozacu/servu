<?php
 
$installer = $this;
 
$installer->startSetup();
 
$installer->run("DROP TABLE IF EXISTS {$installer->getTable('sd_manager_manufacturer')};
CREATE TABLE {$installer->getTable('sd_manager_manufacturer')} (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    attribute_code VARCHAR(255),
    attribute_option_id INT(11),
    attribute_value_store_id INT(11),
    meta_keywords VARCHAR(255),
    meta_description TEXT,
    identifier varchar(100) NOT NULL,
    url_key VARCHAR(255),
    is_featured TINYINT(4) DEFAULT 0 NOT NULL,
    is_enabled TINYINT(4) DEFAULT 0 NOT NULL,
    sort_order INT(11) DEFAULT 0,
    description TEXT,
    page_title VARCHAR(100),
    logo VARCHAR(255),
    UNIQUE KEY manufacturer_unique (attribute_code, attribute_option_id, attribute_value_store_id, is_enabled),
    KEY identifier (identifier),
    KEY attribute_code (attribute_code),
    KEY attribute_option_id (attribute_option_id, attribute_value_store_id)
 ) Engine=InnoDB DEFAULT CHARSET=utf8;");
 
$installer->endSetup();
?>