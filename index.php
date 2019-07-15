<?php

require 'vendor/autoload.php';

use ctrl\CToDo;

$r = parse_url($_SERVER['REQUEST_URI']);
$controller = new CToDo();
$action = trim($r['path'],'/');
if(empty($action)){
    $action = 'actionView';
}
$controller->{$action}();