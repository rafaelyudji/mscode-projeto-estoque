<?php

use App\Controller\AppController;
use App\Controller\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;

$router = [
    'routes' => [
        '/' => LoginController::class,
        '/login' => LoginController::class,
        '/login/autenticar' => AutenticarController::class,
        '/app' => AppController::class
    ],
    'default' => NotFoundController::class
];
