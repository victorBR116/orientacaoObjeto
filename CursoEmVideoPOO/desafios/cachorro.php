<?php

require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\mamifero.php";

class Cachorro extends Mamifero{
    public function enterrarOsso(){
        echo "<p>Vai me enterrar na areia?</p>";
    }

    public function abanarRabo(){
        echo "<p>Cachorro está rebolando</p>";
    }
    public function emitirSom()
    {
        echo "<p>Au au au au</p>";
    }
}