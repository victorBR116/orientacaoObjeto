<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Conta\Funcionarios\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionarBonificacoesDe(Funcionario $funcionario)
    {
      $this->totalBonificacoes += $funcionario->CalculaBonificacao();
    }
   
    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
   
}
