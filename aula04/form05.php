<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cor de Fundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Alterar Cor de Fundo</h2>
        <form action="exe05.php" method="POST">
            <div class="mb-3">
                <label for="cor" class="form-label">Escolha uma cor</label>
                <input type="color" class="form-control" id="cor" name="cor" required>
            </div>
            <button type="submit" class="btn btn-primary">Alterar Cor</button>
        </form>
    </div>
</body>
</html>