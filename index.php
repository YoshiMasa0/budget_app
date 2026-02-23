<?php
require_once "config.php";
require_once "application/constant.php";

spl_autoload_register(function ($class) {
    require_once Constants::CONTROLLER_PATH . $class . '.php';
});

$routes = [
    '/' => MonthBudgetController::class,
];

// ルーティング処理
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (!isset($routes[$request_uri])) {
    http_response_code(404);
    echo "404 Not Found";
    exit;
}

$controllerClass = $routes[$request_uri];
new $controllerClass()->run();
