<?php

namespace App\Model;

use App\Database\Query;

class Produto
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }
    
    public function cadastrar(array $dados): void
    {
        $this->query->insert('produto', $dados);
    }

    public function remover(int $id): void
    {
        $this->query->delete('produto', "id = {$id}");
    }

    public function listar(): array
    {
        return $this->query->select('produto');
    }

    public function buscar(int $id): array
    {
        return $this->query->select('produto', "id = {$id}")[0];
    }

    public function editar(int $id, array $dados): void
    {
        $this->query->update('produto', $dados, "id = {$id}");
    }
}
