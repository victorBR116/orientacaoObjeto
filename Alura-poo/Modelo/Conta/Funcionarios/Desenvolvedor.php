<?php

namespace Alura\Banco\Modelo\Conta\Funcionarios;

class Desenvolvedor extends Funcionario
{
    public function sobeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() *0.40);
    }

    public function calculaBonificacao(): float 
    {
        return 500.0;
    }
}



