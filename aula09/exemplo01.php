<?php
    include_once 'Pessoa.class.php';

    // Intanciar um objeto (Nova pessoa!)
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;

    // Atribuir alguns valores
    $pessoa1->Nome = 'Gustavo da silva';
    $pessoa1->Peso = 83.3;
    $pessoa1->Altura = 1.82;

    $pessoa2->Nome = 'Isabella da silva';
    $pessoa2->Peso = 48.3;
    $pessoa2->Altura = 1.60;

    // Chamando um método da classe pessoa
    $pessoa1->MostrarDados();
    $pessoa2->MostrarDados();

?>