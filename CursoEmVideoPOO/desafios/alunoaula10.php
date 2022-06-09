<?php

require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\pessoaaula10.php";

class Aluno extends Pessoa{
    private bool $matricula;
    private string $curso;

    function __construct($matricula, $curso)
    {
        $this->matricula = $matricula;
        $this->curso = $curso;

    }
    public function cancelarMatricula(){
        $this->matricula = false;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

}