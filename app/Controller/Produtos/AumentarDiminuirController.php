<?php

namespace App\Controller\Produtos;

use App\Controller\AbstractController;
use App\Model\Produto;

class AumentarDiminuirController extends AbstractController
{
    public function index(array $requestData): void
    {
        $model = new Produto();
            
        if (isset($requestData['acao']) && isset($requestData['id'])) {
            $id = (int) $requestData['id'];
            $acao = $requestData['acao'];

            if ($acao === 'aumentar') {
                $model->aumentarQuantidade($id);
            } elseif ($acao === 'diminuir') {
                $model->diminuirQuantidade($id);
            }
        }

        $this->redirect('/produtos');
    }
}
