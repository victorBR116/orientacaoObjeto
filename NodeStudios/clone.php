<?php
//Referência e Clonagem de objetos

class Pessoa{
    public $idade;
    
    public function __clone(){
        echo "Clonagem de objetos ";
    }
}

$pessoa1 = new Pessoa();
$pessoa1->idade = 20;

$pessoa2 = clone $pessoa1;
$pessoa2->idade = 21;

echo $pessoa2->idade;