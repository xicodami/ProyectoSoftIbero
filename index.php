
<?php
require_once "models/Database.php";
if(!isset($_REQUEST['c'])){
    require_once "controllers/Login.php";
    $controller = new Login;
    $controller->index();
}else {
    $controller = $_REQUEST['c'];
    require_once "controllers/".$controller . ".php";
    $controller = new $controller;
    $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : "index";
    call_user_func(array($controller, $action));
}
