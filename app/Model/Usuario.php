<?php

namespace App\Model;

use App\Database\Database;
use App\Database\Query;

class Usuario
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

    public function buscarPorEmail(string $email): array
    {
        $usuario = $this->query->select('usuario', "email = '{$email}'");

        return $usuario;
    }
}
