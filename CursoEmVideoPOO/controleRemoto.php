<?php

class Controle{
    public $ligar;
    public $botoes;
    public $pilha;
    
    public function ligarControle(){
        $this->ligar = true;
        echo "Controle Ligado";
    }
    public function desligarControle(){
        $this->ligar = false;
        echo "Controle desligado";
    }
}

$controle1 = new Controle();
$controle1->ligar = false;
$controle1->botoes = "2";
$controle1->pilha = "Palito";

echo $controle1->ligarControle() . PHP_EOL;
echo $controle1->desligarControle();

