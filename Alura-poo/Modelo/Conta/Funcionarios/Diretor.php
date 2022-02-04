<?php

namespace Alura\Banco\Modelo\Conta\Funcionarios;

class Diretor extends Funcionario
{
    public function CalculaBonificacao(): float
    {
       return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'senhaMestraSuperSecretaDoDiretor';
    }
}