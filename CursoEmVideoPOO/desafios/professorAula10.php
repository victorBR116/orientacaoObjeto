<?php

require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\pessoaaula10.php";

class Professor extends Pessoa{
    private string $especialidade;
    private float $salario;

    function __construct($especialidade, $salario)
    {
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function receberAumento($au){
        $this->salario += $au;
    }

    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }
}