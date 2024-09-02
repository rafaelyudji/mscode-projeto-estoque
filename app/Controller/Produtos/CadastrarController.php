<?php

namespace App\Controller\Produtos;

use App\Controller\AbstractController;

class CadastrarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $this->render('produtos/cadastrar_editar.php');
    }
}
