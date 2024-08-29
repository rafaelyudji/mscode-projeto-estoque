<?php

namespace App\Controller\Categorias;


use App\Controller\AbstractController;

class CadastrarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $this->render('categorias/cadastrar_editar.php');
    }
}
