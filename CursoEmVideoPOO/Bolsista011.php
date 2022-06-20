<?php
require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\AlunoAula11.php";
class Bolsista extends Aluno{
    private $bolsa;
    
    public function renovarBolsa(){
        echo "<p> Bolsa Renovada </p>";
    }

    public function PagarMensalidade()
    {
        echo "é bolsista! Então paga com desconto";
    }

    public function getBolsa(){
        return $this->bolsa;
    }

    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
}