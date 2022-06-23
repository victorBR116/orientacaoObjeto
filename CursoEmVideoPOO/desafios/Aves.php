<?php

require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\Animal.php";

class Ave extends Animal{
    private $corPena;

    public function alimentar()
    {
        echo "<p>Comeu um rato</p>";
    }

    public function locomover()
    {
        echo "<p>Voando alto</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de Ave</p>";
    }

    public function FazerNinho(){
        echo "<p>Construiu um ninho</p>"; 
    }

    public function getCorPena(){
        return $this->corPena;
    }

    public function setCorPena($corPena){
        $this->corPena = $corPena;
    }
}