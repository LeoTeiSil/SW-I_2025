<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["cxnome"];
    $mensagem = $_POST["cxmensagem"];

    echo "Bem vindo, $nome <br><br>";
    echo $mensagem;
} else {
    echo "Formulário não submetido.";
}
?>