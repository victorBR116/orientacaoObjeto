<?php 

require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\Animal.php";

class peixe extends Animal{
    private $corEscama;

    public function locomover()
    {
        echo "<p>Nadando</p>";
    }

    public function emitirSom()
    {
        echo "<p>Glu glu</p>";
    }
    
    public function alimentar()
    {
        echo "<p>Comendo planctons</p>";
    }

    public function soltarPeido(){
        echo "Peixe peidou";
    }

    public function getCorEscama(){
        return $this->corEscama;
    }

    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
}