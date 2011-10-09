<?php
//include_once __DIR__ . '/../includes/zendloader.inc';
require_once __DIR__.'/../Utility/DIContainer.php';

use Utility\DIContainer;

$serviceContainer = new DIContainer();
$serviceContainer->init();

$config = $serviceContainer->get('my_config');

echo $config->get('host');