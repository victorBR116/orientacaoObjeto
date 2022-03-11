<?php

class Controle{
    public bool $ligar;
    public string $botoes;
    public string $pilha;
 
    public function __construct($l, $b)    
    { 
        $this->ligar = $l;
        $this->botoes = $b;
       $this->retirouPilhas();
    }
    
    public function desligarControle(){
        $this->ligar = false;
    }

    public function trocouDeCanal(){
        $this->botoes = "Trocou de canal";
    }

    public function retirouPilhas(){
        $this->pilha = "Sem pilhas";
    }
 }

