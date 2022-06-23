<?php
require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\Animal.php";

class Mamifero extends Animal{
    private $corPelo;

    public function alimentar()
    {
    echo "<p>Mamando</p>";
    }

    public function locomover()
    {
        echo "<p>Correndo</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de Mamífero</p>";
    }

    public function getCorPelo(){
        return $this->corPelo;
    }

    public function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }
}