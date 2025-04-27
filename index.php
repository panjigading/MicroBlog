<?php
error_reporting(~E_NOTICE);

$controller = isset($_GET['c']) ? $_GET['c'] : 'mblog_controller';

$method = isset($_GET['m']) ? $_GET['m'] : 'index';

include_once "controllers/controller.class.php";
include_once "controllers/$controller.class.php";

(new $controller)->$method();
