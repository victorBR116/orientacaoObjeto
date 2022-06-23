<?php 

require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\Animal.php";

class Repitil extends Animal{
    private $corEscama;

    public function locomover()
    {
        echo "<p>Rastejando</p>";
    }

    public function alimentar()
    {
        echo "<p>Comendo insetos</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de répitil</p>";
    }

    public function getCorEscama(){
       return $this->corEscama;
    }

    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
}