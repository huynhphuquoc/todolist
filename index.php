<?php

// Define Path for file index.php
define('PATH_ROOT', __DIR__);

// Autoload class
spl_autoload_register(function (string $class_name) {
    include_once PATH_ROOT . '/' . $class_name . '.php';
});

// load class Route
$router = new Config\Http\Route();
include_once PATH_ROOT . '/src/routes.php';

// Get current URL
$request_url = !empty($_GET['url']) ? '/' . $_GET['url'] : '/';

// Get curent method off URL
$method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

// map URL
$router->map($request_url, $method_url);