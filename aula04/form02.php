<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Maior Número</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Verificar Maior Número</h2>
        <form action="exe02.php" method="GET">
            <div class="mb-3">
                <label for="numero1" class="form-label">Número 1</label>
                <input type="number" class="form-control" id="numero1" name="numero1" required>
            </div>
            <div class="mb-3">
                <label for="numero2" class="form-label">Número 2</label>
                <input type="number" class="form-control" id="numero2" name="numero2" required>
            </div>
            <div class="mb-3">
                <label for="numero3" class="form-label">Número 3</label>
                <input type="number" class="form-control" id="numero3" name="numero3" required>
            </div>
            <button type="submit" class="btn btn-primary">Verificar Maior</button>
        </form>
    </div>
</body>
</html>