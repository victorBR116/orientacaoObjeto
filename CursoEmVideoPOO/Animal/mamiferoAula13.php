<?php
require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Animal\animalAula13.php";
class Mamifero extends animal2{

    protected $corDoPelo;
    public function emitirSom()
    {
        echo "<p>Som de Mamifero</p>";
    }
}