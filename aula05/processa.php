<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'leonardosilva@email.com' && $senha == 'miniprojeto'){
        $nome = "Leonardo";
        header('Location: privada.php?nome='.$nome);
    }else{
        header('Location: erro.php');
    }
?>