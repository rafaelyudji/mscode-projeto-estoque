<?php

namespace App\Controller\Categorias;

use App\Controller\AbstractController;
use App\Model\Categoria;

class EditarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $id = $requestData['id'];

        $model = new Categoria();
        $categoria = $model->buscar($id);

        $this->render('categorias/cadastrar_editar.php', ['categoria' => $categoria]);
    }
}
