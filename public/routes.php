<?php

use App\Controller\AppController;
use App\Controller\AutenticarController;
use App\Controller\Categorias\CadastrarController;
use App\Controller\Categorias\EditarController;
use App\Controller\Categorias\ListarController;
use App\Controller\Categorias\RemoverController;
use App\Controller\Categorias\SalvarController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;

$router = [
    'routes' => [
        '/' => LoginController::class,
        '/login' => LoginController::class,
        '/login/autenticar' => AutenticarController::class,
        '/app' => AppController::class,
        '/categorias' => ListarController::class,
        '/categorias/editar' => EditarController::class,
        '/categorias/remover' => RemoverController::class,
        '/categorias/cadastrar' => CadastrarController::class,
        '/categorias/cadastrar/salvar' => SalvarController::class,
    ],
    'default' => NotFoundController::class
];
