<?php

namespace Alura\Banco\Modelo\Conta\Funcionarios;

use Alura\Banco\Modelo\Conta\Autenticavel;
use ReflectionFunctionAbstract;

class Gerente extends Funcionario implements Autenticavel
{
    public function CalculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }
    
    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'SenhadoGerente';
    }
}