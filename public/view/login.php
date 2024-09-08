<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MS Code - Estoque 2024</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/assets/css/styles.css" rel="stylesheet">
    <link href="/assets/css/login.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
        <?php if (isset($_SESSION['loginErro'])): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['loginErro']; unset($_SESSION['loginErro']); ?>
            </div>
        <?php endif; ?>

        <form action="/login/autenticar" method="POST">
            <div class="d-flex align-items-center mb-4">
                <img class="p-0" src="/assets/images/logotipo.svg" width="72" height="57">

                <h1 class="h3 fw-normal my-0 ms-2">MS Code - Estoque</h1>
            </div>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="senha" placeholder="Password">
                <label for="senha">Senha</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Acessar</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
