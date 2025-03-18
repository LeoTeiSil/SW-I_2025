<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$bandeira = $_POST['bandeira'];

echo "<h2>Informações Enviadas:</h2>";
echo "<p>Nome: $nome</p>";
echo "<p>E-mail: $email</p>";
echo "<p>Data de Nascimento: $data_nascimento</p>";
echo "<p>Bandeira do Cartão: $bandeira</p>";
?>