<?php

class Caneta{
    public $cor;
    public $tamanho;
    public $tampada;
}


$loja1 = new Caneta();
$loja1->cor = "Vermelha";
$loja1->tamanho = 0.5;
$loja1->tampada = "Sim";

echo "Caneta é" .PHP_EOL;
echo $loja1->cor . PHP_EOL;
echo $loja1->tamanho . PHP_EOL;
echo $loja1->tampada . PHP_EOL;