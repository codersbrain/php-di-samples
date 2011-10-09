<?php
include_once __DIR__.'/../includes/zendloader.inc';
require_once __DIR__ . '/../Services/MyConfig.php';

$config = new MyConfig();

$config->setConfig(new Zend_Config_Xml('../configs/configs.xml','production'));

echo 'host: ' . $config->get('host');