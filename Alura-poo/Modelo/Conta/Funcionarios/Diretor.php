<?php

namespace Alura\Banco\Modelo\Conta\Funcionarios;

use Alura\Banco\Modelo\Conta\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
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