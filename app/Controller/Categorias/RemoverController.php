<?php

namespace App\Controller\Categorias;

use App\Controller\AbstractController;
use App\Model\Categoria;

class RemoverController extends AbstractController
{
    public function index(array $requestData): void
    {
        $model = new Categoria();

        $model->remover($requestData['id']);

        $this->redirect('/categorias');
    }
}
