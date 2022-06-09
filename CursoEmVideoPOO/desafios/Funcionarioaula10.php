<?php
require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\pessoaaula10.php";

class Funcionario extends Pessoa{
    private string $setor;
    private bool $trabalhando;

    function __construct($setor, $trabalhando)
    {
        $this->setor = $setor;
        $this->trabalhando = $trabalhando;
    }

    public function mudarTrabalho(){
        $this->trabalhando = false;
        $this->setor = "Sem setor";
    }

    public function getSetor(){
        return $this->setor;
    }
    
    public function getTrabalhando(){
        return $this->trabalhando;
    }

    public function setSetor($setor){
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }
}