<?php

namespace App\Controller\Produtos;

use App\Controller\AbstractController;
use App\Model\Produto;

class EditarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $id = $requestData['id'];

        $model = new Produto();
        $produto = $model->buscar($id);

        $this->render('produtos/cadastrar_editar.php', ['produto' => $produto]);
    }
}
