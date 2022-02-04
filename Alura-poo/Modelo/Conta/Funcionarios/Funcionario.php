<?php

namespace Alura\Banco\Modelo\Conta\Funcionarios;

use Alura\Banco\Pessoa;
use Alura\Banco\CPF;

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private  $salario;
   
    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
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
    

    public function CalculaBonificacao(): float
    {
        return $this->salario *0.1;
    }
}

