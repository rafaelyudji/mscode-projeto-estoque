<?php

use App\Controller\AppController;
use App\Controller\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;

use App\Controller\Categorias\CadastrarController as CategoriasCadastrarController;
use App\Controller\Categorias\EditarController as CategoriasEditarController;
use App\Controller\Categorias\ListarController as CategoriasListarController;
use App\Controller\Categorias\RemoverController as CategoriasRemoverController;
use App\Controller\Categorias\SalvarController as CategoriasSalvarController;

use App\Controller\Produtos\CadastrarController as ProdutosCadastrarController;
use App\Controller\Produtos\EditarController as ProdutosEditarController;
use App\Controller\Produtos\ListarController as ProdutosListarController;
use App\Controller\Produtos\RemoverController as ProdutosRemoverController;
use App\Controller\Produtos\SalvarController as ProdutosSalvarController;
use App\Controller\Produtos\AumentarDiminuirController;

$router = [
    'routes' => [
        '/' => LoginController::class,
        '/login' => LoginController::class,
        '/login/autenticar' => AutenticarController::class,
        '/app' => AppController::class,
        
        // Rotas para Categorias
        '/categorias' => CategoriasListarController::class,
        '/categorias/editar' => CategoriasEditarController::class,
        '/categorias/remover' => CategoriasRemoverController::class,
        '/categorias/cadastrar' => CategoriasCadastrarController::class,
        '/categorias/cadastrar/salvar' => CategoriasSalvarController::class,
        
        // Rotas para Produtos
        '/produtos' => ProdutosListarController::class,
        '/produtos/editar' => ProdutosEditarController::class,
        '/produtos/remover' => ProdutosRemoverController::class,
        '/produtos/cadastrar' => ProdutosCadastrarController::class,
        '/produtos/cadastrar/salvar' => ProdutosSalvarController::class,
        '/produtos/alterar-quantidade' => AumentarDiminuirController::class, 
        
    ],
    'default' => NotFoundController::class
];
