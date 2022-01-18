<?php

class Pessoa{
    const nome = "Victor";

    public function exibirNome(){
        echo self::nome;
    }
}
class Victor extends Pessoa{
    const nome = "Hugo";
    
    public function exibirNome(){
        echo parent::nome;
    }
}

$victor = new Victor();
$victor->exibirNome();