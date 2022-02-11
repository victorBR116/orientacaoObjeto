<?php
namespace Alura\Banco\Modelo\Conta\Funcionarios;

class VideoMaker extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 100;
    }

    public function recuperaSalario(): float
    {
        return -200;
    }
}
