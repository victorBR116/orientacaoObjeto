<?php

require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Pessoa011.php";

class Tecnico extends Aluno{
    private $registroProfissional;


    public function praticar(){
        echo "Aluno está trabalhando";
    }

    public function getRegistro(){
        return $this->registroProfissional;
    }

    public function setRegistro($registroProfissional){
        $this->registroProfissional = $registroProfissional;
    }
}