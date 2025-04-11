<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/exercicio01.css">
  <title>Document</title>
</head>
<body>
    
<table>
  <?php

  for ($i = 1; $i <= 8; $i++) {
    if ($i % 2 == 0) {
      echo "<tr class='linha-par'>";
    } else {
      echo "<tr class='linha-impar'>";
    }

    for ($j = 1; $j <= 4; $j++) {
      echo "<td>Linha $i, Coluna $j</td>";
    }

    echo "</tr>";
  }
  ?>
</table>

</body>
</html>