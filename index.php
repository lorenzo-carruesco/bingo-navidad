<?php

spl_autoload_register(function ($nombre_clase) {
    include 'controllers/' . str_replace(" ", "", ucwords($nombre_clase)) . '.php';
});

$controller_name = (isset($_GET['controller']) ? $_GET['controller'] : 'index') . 'Controller';
$controller_class = new $controller_name();
$controller_class->run();
