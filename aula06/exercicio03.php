<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/exercicio03.css">
  <title>Document</title>
</head>
<body>

<table>
  <tr>
    <th>Nome</th>
    <th>Preço</th>
    <th>Categoria</th>
  </tr>

  <?php
  $produtos = [
    ["nome" => "Celular", "preco" => "1500.00", "categoria" => "Eletrônico"],
    ["nome" => "Camisa", "preco" => "60.00", "categoria" => "Roupas"],
    ["nome" => "Moto", "preco" => "8500.00", "categoria" => "Veículo"],
  ];

  foreach ($produtos as $produto) {
    $categoria = $produto["categoria"];
    echo "<tr class='$categoria'>";
    echo "<td>" . $produto["nome"] . "</td>";
    echo "<td>R$ " . $produto["preco"] . "</td>";
    echo "<td>" . $produto["categoria"] . "</td>";
    echo "</tr>";
  }
  ?>
</table>

</body>
</html>
