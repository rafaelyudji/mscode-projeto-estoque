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

    public function diminuirQuantidade(int $id): void
    {
        $produto = $this->buscar($id);
        if ($produto) {
            $novaQuantidade = $produto['quantidade_disponivel'] - 1;
            if ($novaQuantidade >= 0) {
                $this->query->update('produto', ['quantidade_disponivel' => $novaQuantidade], "id = {$id}");
            }
        }
    }

    public function aumentarQuantidade(int $id): void
    {
        $produto = $this->buscar($id);
        if ($produto) {
            $novaQuantidade = $produto['quantidade_disponivel'] + 1;
            $this->query->update('produto', ['quantidade_disponivel' => $novaQuantidade], "id = {$id}");
        }
    }
}
