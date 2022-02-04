<?php

namespace Alura\Banco\Modelo\Conta\Funcionarios;

class Gerente extends Funcionario
{
    public function CalculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }
}