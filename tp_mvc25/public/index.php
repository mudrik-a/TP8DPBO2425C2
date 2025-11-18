<?php
require_once __DIR__ . '/../config/database.php';

spl_autoload_register(function($class){
    $paths = [
        __DIR__ . '/../app/controllers/' . $class . '.php',
        __DIR__ . '/../app/models/' . $class . '.php',
    ];
    foreach ($paths as $p){
        if (file_exists($p)) require_once $p;
    }
});

$controller = $_GET['controller'] ?? 'lecturer';
$action     = $_GET['action']     ?? 'index';

$controllerClass = ucfirst($controller) . "Controller";

if (!class_exists($controllerClass)) die("Controller not found");
$obj = new $controllerClass($pdo);

if (!method_exists($obj, $action)) die("Action not found");

$obj->$action();
