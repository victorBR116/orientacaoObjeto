<?php
require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\lutador.php";

class luta {
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;

    public function marcarLuta( $l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria()
        && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante =null;
        }
    }

    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0;  //empate
                    echo " <p>Empate</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break; 
                case 1; //desafiado vence
                    echo "<p>" . $this->desafiado->getNome() . " venceu a luta. </p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2; //desafiante vence
                    echo "<p> O " . $this->desafiante->getNome() . " venceu a luta."; 
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        }else{
            echo "<p>Opa opa, parece que essa luta não vai acontecer....</p>";
        }
    }

    function getDesafiado(){
        return $this->desafiado;
    }

    function getDesafiante(){
        return $this->desafiante;
    }
    
    function getRounds(){
        return $this->rounds;
    }

    function getAprovada(){
        return $this->aprovada;
    }

    function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds){
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }
}