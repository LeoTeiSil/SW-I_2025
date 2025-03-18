<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];

$maior = max($numero1, $numero2, $numero3);

echo "<h2>Resultado:</h2>";
echo "<p>O maior número é: $maior</p>";
?>