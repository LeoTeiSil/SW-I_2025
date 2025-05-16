<?php
    include_once 'Conta.class.php';

    $conta1 = new Conta();
    // var_dump($conta1);

    $conta1->Nome = " Leonardo ";
    $conta1->Cpf = ": 202.202.234-03";
    // $conta1->Saldo =  500;

    $conta1->ConsultarSaldo();
    echo"<hr>";

    echo $conta1->Depositar(250);

    echo"<hr>";

    echo $conta1->Sacar(800);

    echo"<hr>";


?>