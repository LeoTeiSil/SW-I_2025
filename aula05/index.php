<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo_index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <form action="processa.php" method="POST">
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Endereço de Email</label>
                <input type="email" id="form2Example1" class="form-control" name="email" aria-label="Digite seu email"/>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Senha</label>
                <input type="password" id="form2Example2" class="form-control" name="senha" aria-label="Digite sua senha"/>
            </div>

            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                        <label class="form-check-label" for="form2Example34"> Lembrar-me </label>
                    </div>
                </div>

                <div class="col">
                    <a href="recuperar_senha.php">Esqueceu a senha?</a>
                </div>
            </div>

            <input type="submit" class="btn btn-primary btn-block mb-4" value="Entrar">

            <div class="text-center">
                <p>Não tem uma conta? <a href="cadastro.php">Registre-se</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
