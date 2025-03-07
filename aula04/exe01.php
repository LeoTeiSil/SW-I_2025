<?php
    $nome = $_GET["cxnome"];

    $pnota = $_GET["cxnota1"];
    $snota = $_GET["cxnota2"];
    $tnota = $_GET["cxnota3"];

    echo "Bem vindo, $nome \n";

    $media = $pnota + $snota + $tnota / 3;

    echo  "A média de suas notas é: $media";
?>