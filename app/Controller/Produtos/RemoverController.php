<?php

namespace App\Controller\Produtos;

use App\Controller\AbstractController;
use App\Model\Produto;

class RemoverController extends AbstractController
{
    public function index(array $requestData): void
    {
        $model = new Produto();

        $model->remover($requestData['id']);

        $this->redirect('/produtos');
    }
}
