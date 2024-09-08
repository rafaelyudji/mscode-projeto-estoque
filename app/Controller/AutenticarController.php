<?php

namespace App\Controller;

use App\Model\Usuario;

class AutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $usuarioConexao = new Usuario();

        $email = strtolower(trim($requestData['email']));
        $usuarios = $usuarioConexao->buscarPorEmail($email);

        if (empty($usuarios) || !isset($usuarios[0])) {
            $_SESSION['loginErro'] = "Usuário não encontrado!";
            $this->redirect('/login');
            exit;
        }

        $usuario = $usuarios[0];
        $senhaFornecida = $requestData['password'];
        $senhaHashBanco = $usuario['senha'];

        if (!password_verify($senhaFornecida, $senhaHashBanco)) {
            $_SESSION['loginErro'] = "Email ou senha incorretos!";
            $this->redirect('/login');
            exit;
        }

        $_SESSION['usuarioEstaLogado'] = true;
        $_SESSION['email'] = $email;

        $this->redirect('/app');
    }
}
