<?php
require_once __DIR__.'/Utility/DIContainer.php';

use Utility\DIContainer;

$serviceContainer = new DIContainer();
$serviceContainer->init();

$service = $serviceContainer->get('my_service');

echo $service->getMessage();
