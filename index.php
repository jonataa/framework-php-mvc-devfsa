<?php
$key = (isset($_GET['key']) && !empty($_GET['key']) ? $_GET['key'] : 'index/index');
$separator = explode('/', $key);

$controller = $separator[0];
$action     = (isset($separator[1]) && !empty($separator[1]) ? $separator[1] : 'index');

require_once 'app/controllers/Controller.php';
require_once 'app/controllers/'.$controller.'Controller.php';

$app = new $controller();
$app->$action();




