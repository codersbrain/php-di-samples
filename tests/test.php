<?php
require_once __DIR__.'/../Services/MyDao.php';
require_once __DIR__.'/../Services/MyDaoImpl.php';
require_once __DIR__.'/../Services/MyMessage.php';
require_once __DIR__.'/../Services/MyMessageImpl.php';
require_once __DIR__.'/../Services/MyValidator.php';
require_once __DIR__.'/../Services/MyValidatorImpl.php';
require_once __DIR__.'/../Services/MyService.php';
require_once __DIR__.'/../Services/MyServiceImpl.php';

use Services\MyDaoImpl;
use Services\MyMessageImpl;
use Services\MyValidatorImpl;
use Services\MyServiceImpl;


$dao = new MyDaoImpl();
$message = new MyMessageImpl($dao);
$validator = new MyValidatorImpl();
$service = new MyServiceImpl();
$service->setMyMessage($message);
$service->setMyValidator($validator);
echo $service->displayMessage();
echo "\n";
