<?php

namespace App\Controller;

use App\Model\Usuario;

class AutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $usuarioConexao = new Usuario();
        $usuario = $usuarioConexao->buscarPorEmail($requestData['email']);
        if (empty($usuario)) {
            $this->redirect('/error');

            exit;
        }

        $_SESSION['usuarioEstaLogado'] = true;
        $_SESSION['email'] = $requestData['email'];

        $this->redirect('/app');
    }
}
