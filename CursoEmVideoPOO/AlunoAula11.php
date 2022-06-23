<?php
require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Pessoa011.php";
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    
    public function PagarMensalidade(){
        echo "Mensalidade do Aluno " . $this->getNome();
    }

    public function getMatricula(){
        return $this->matricula;
    }
    
    public function getCurso(){
        return $this->curso;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }
}