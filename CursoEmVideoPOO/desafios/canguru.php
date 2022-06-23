<?php
require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\mamifero.php";

class Canguro extends Mamifero{
    public function usarBolsa(){
        echo "<p>Usando bolsa</p>";
    }
    public function locomover()
    {
        echo "Saltando";
    }
}