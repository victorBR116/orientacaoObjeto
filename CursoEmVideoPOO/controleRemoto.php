<?php

class Controle{
    public $ligar;
    public $botoes;
    public $pilha;
    
    public function ligarControle(){
        if($this->ligar == true){
            echo "Controle ligado"; 
    }else{
        echo "Controle está desligado";
    }
    }
    public function mudaCanal(){
        echo "Mudou de canal";   
    }
    
}

$controle1 = new Controle();
$controle1->ligar = false;
$controle1->botoes = "2";
$controle1->pilha = "Palito";

