<?php

namespace Alura\Banco\Modelo\Conta\Funcionarios;

class Desenvolvedor extends Funcionario
{
  

    public function calculaBonificacao(): float 
    {
        return 500.0;
    }
}



