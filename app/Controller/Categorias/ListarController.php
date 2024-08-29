<?php

namespace App\Controller\Categorias;

use App\Controller\AbstractController;
use App\Model\Categoria;

class ListarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $model = new Categoria();
        $categorias = $model->listar();

        $this->render('categorias/categorias.php', ['categorias' => $categorias]);
    }
}
