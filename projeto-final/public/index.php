<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\CategoryController;
use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName)
{
    return [
        'controller' => $controllerName,
        'method' => $methodName,
    ];
}

$routes = [
    //com o nome da classe::class está invocando o caminho da classe, no caso abaixo seria 'App/Controller/ProductController
    '/' => createRoute(IndexController::class, 'indexAction'),

    '/produtos' => createRoute(ProductController::class, 'listAction'),

    '/produtos/novo' => createRoute(ProductController::class, 'addAction')
];

if (false === isset($routes[$url])) {
    // $e = new ErrorController;
    // $e->notFoundAction();
    //uma forma de economizar linha de código, quando a instância será utilizada apenas uma vez.
    (new ErrorController())->notFoundAction();
    exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();

// echo $controllerName;

// var_dump($routes[$url]);
