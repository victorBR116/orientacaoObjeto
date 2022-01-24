<?php

class Produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho{
    public $produtos;
    
    public function adiciona(Produtos $produtos){
      $this->produtos[] = $produtos;
    } 
    public function exibe(){
        foreach ($this->produtos as $produto){
            echo $produto->nome . PHP_EOL;
            echo $produto->valor . PHP_EOL;
        }
    }
}   

$produto1 = new Produtos('Geladeira', "2300");
$produto2 = new Produtos('Fogão - 4 bocas', "450");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();