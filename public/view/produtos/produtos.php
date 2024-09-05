<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MS Code - Projeto Estoque 2024</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="/public/assets/css/styles.css" rel="stylesheet">
</head>

<body>
  <main>
    <div class="border-bottom mb-2">
      <div class="container">
        <header class="d-flex flex-wrap justify-content-center align-items-center py-3">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img class="me-2" src="/public/assets/images/logotipo.svg" width="53">
            <span class="fs-4">MS Code - Estoque</span>
          </a>

          <ul class="nav nav-pills d-flex align-items-center">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Início</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Vendas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="vendas_realizadas.html">Vendas realizadas</a></li>
                <li><a class="dropdown-item" href="nova_venda.html">Nova venda</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Produtos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item active" href="/produtos">Estoque</a></li>
                <li><a class="dropdown-item" href="/categorias">Categorias</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="#" class="btn btn-outline-danger m-0 ms-4" aria-current="page">Sair</a></li>
          </ul>
        </header>
      </div>
    </div>

    <div class="container py-5">
      <div class="mb-4 d-flex flex-row justify-content-between">
        <h1>Produtos</h1>
        <div>
          <a href="/produtos/cadastrar" class="btn btn-primary"><i class="bi bi-plus"></i>Novo produto</a>
        </div>
      </div>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Categoria_id</th>
            <th scope="col">Valor</th>
            <th scope="col">Qtd. Inicial</th>
            <th scope="col">Qtd. Disponível</th>
            <th scope="col-2 text-align-right">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data['produtos'] as $produto) { ?>
            <tr>
              <th scope="row"><?php echo htmlspecialchars($produto['id']); ?></th>
              <td><?php echo htmlspecialchars($produto['nome']); ?></td>
              <td><?php echo htmlspecialchars($produto['descricao']); ?></td>
              <td><?php echo htmlspecialchars($produto['categoria_id']); ?></td>
              <td>R$ <?php echo number_format($produto['valor'], 2, ',', '.'); ?></td>  
              <td><?php echo htmlspecialchars($produto['quantidade_inicial']); ?></td>
              <td><?php echo htmlspecialchars($produto['quantidade_disponivel']); ?></td>
              <td class="col-2 text-align-right">
              <a href="/produtos/alterar-quantidade?id=<?php echo htmlspecialchars($produto['id']); ?>&acao=aumentar" class="btn btn-primary btn-sm">
                  <i class="bi bi-plus"></i>
              </a>  
              <a href="/produtos/editar?id=<?php echo htmlspecialchars($produto['id']); ?>" class="btn btn-secondary btn-sm">
                  <i class="bi bi-pencil"></i>
              </a>
              <a href="/produtos/remover?id=<?php echo htmlspecialchars($produto['id']); ?>" class="btn btn-danger btn-sm">
                  <i class="bi bi-x"></i>
              </a>
              <a href="/produtos/alterar-quantidade?id=<?php echo htmlspecialchars($produto['id']); ?>&acao=diminuir" class="btn btn-primary btn-sm">
                  Vender
              </a>
</td>

              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
