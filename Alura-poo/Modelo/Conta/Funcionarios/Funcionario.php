<?php

namespace Alura\Banco\Modelo\Conta\Funcionarios;

use Alura\Banco\Pessoa;
use Alura\Banco\CPF;

abstract class Funcionario extends Pessoa
{
    private  $salario;
   
    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }
    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if($valorAumento < 0 )
        {
            echo "Tentando diminuir o salario do seu funcionario? Sem vergonha";
            return;
        }

        $this->salario += $valorAumento;
        
    }
    
    public function recuperaSalario(): float
    {
        return $this->salario;
    }
    
    abstract public function calculaBonificacao(): float;
}

