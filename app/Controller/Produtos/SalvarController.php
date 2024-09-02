<?php

namespace App\Controller\Produtos;

use App\Controller\AbstractController;
use App\Model\Produto;

class SalvarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $model = new Produto();

        if (isset($requestData['id'])) {
            $model->editar($requestData['id'], [
                'nome' => $requestData['nome'],
                'descricao' => $requestData['descricao'],
                'categoria_id' => $requestData['categoria_id'],
                'quantidade_inicial' => $requestData['quantidade'],
                'quantidade_disponivel' => $requestData['quantidade'],
                'valor' => $requestData['valor'],
            ]);
        } else {
            $model->cadastrar([
                'nome' => $requestData['nome'],
                'descricao' => $requestData['descricao'],
                'categoria_id' => $requestData['categoria_id'],
                'quantidade_inicial' => $requestData['quantidade'],
                'quantidade_disponivel' => $requestData['quantidade'],
                'valor' => $requestData['valor'],
            ]);
        }

        $this->redirect('/produtos');
    }
}
