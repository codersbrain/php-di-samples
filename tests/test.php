<?php
require_once __DIR__.'/../Services/MyService.php';
require_once __DIR__.'/../Services/MyMessage.php';

use Services\MyService;
use Services\MyMessage;

$message = new MyMessage();


$service = new MyService($message);
//$service = new MyService();
//$service->setMyMessage($message);
echo $service->getMessage();
