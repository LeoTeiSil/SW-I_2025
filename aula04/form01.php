<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Calculadora de Média</h2>
        <form action="exe01.php" method="GET">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Estudante</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="nota1" class="form-label">Nota 1</label>
                <input type="number" class="form-control" id="nota1" name="nota1" min="0" max="10" required>
            </div>
            <div class="mb-3">
                <label for="nota2" class="form-label">Nota 2</label>
                <input type="number" class="form-control" id="nota2" name="nota2" min="0" max="10" required>
            </div>
            <div class="mb-3">
                <label for="nota3" class="form-label">Nota 3</label>
                <input type="number" class="form-control" id="nota3" name="nota3" min="0" max="10" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Média</button>
        </form>
    </div>
</body>
</html>