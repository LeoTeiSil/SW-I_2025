<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Produto
    {
        private $nome;
        private $preco;
        private $quantidade;

        function __construct($nome, $preco, $quantidade)
        {
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
        }

        function getNome()
        {
            return $this->nome;
        }

        function setNome($nome)
        {
            $this->nome = $nome;
        }

        function getPreco()
        {
            return $this->preco;
        }

        function setPreco($preco)
        {
            $this->preco = $preco;
        }

        function adicionarEstoque($qtd)
        {
            $this->quantidade += $qtd;
        }

        function removerEstoque($qtd)
        {
            $this->quantidade -= $qtd;
        }

        function mostrarDetalhes()
        {
            echo "Produto: $this->nome\n";
                echo "<hr>";

            echo "Preço: R$$this->preco\n";
                echo "<hr>";

            echo "Quantidade em estoque: $this->quantidade\n";
        }
    }

    $produto = new Produto("Notebook", 3299.99, 20);
    $produto->adicionarEstoque(5);
    $produto->removerEstoque(2);
    $produto->mostrarDetalhes();

    ?>

</body>

</html>