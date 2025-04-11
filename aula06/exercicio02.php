<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<form method="post">
  Número de Linhas: <input type="number" name="linhas" required>
  Número de Colunas: <input type="number" name="colunas" required>
  <input type="submit" value="Gerar Tabela">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $linhas = $_POST["linhas"];
  $colunas = $_POST["colunas"];

  echo "<table border='1' cellpadding='10'>";

  $i = 1;
  while ($i <= $linhas) {
    echo "<tr>";

    $j = 1;
    while ($j <= $colunas) {
      echo "<td>Linha $i, Coluna $j</td>";
      $j++;
    }

    echo "</tr>";
    $i++;
  }

  echo "</table>";
}
?>

</body>
</html>
