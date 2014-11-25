<?php
$installer = $this;

$installer->startSetup();

$installer->run("
-- DROP TABLE IF EXISTS {$this->getTable('gsl_product_notify')}

CREATE TABLE {$this->getTable('gsl_product_notify')} (
	`product_id` varchar(255) NOT NULL default '',
	`email` varchar(255) NOT NULL default '',
	`request_date` datetime NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

");

$installer->endSetup();

?>