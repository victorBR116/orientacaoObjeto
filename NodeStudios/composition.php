<?php

class Pessoa{
   public function atribuiNome($nome){
        return "acho que seu nome é " . $nome;
    }
}

class Exibe{
    public $pessoa;
    public $nome;

    function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe1 = new Exibe("Victor");
echo $exibe1->exibeNome();