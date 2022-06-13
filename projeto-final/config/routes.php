<?php

use App\Controller\CategoryController;
use App\Controller\IndexController;
use App\Controller\ProductController;

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

    '/produtos/novo' => createRoute(ProductController::class, 'addAction'),

    '/categorias' => createRoute(CategoryController::class, 'listAction')
];

return $routes;