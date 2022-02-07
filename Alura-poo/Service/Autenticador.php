<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Conta\Funcionarios\Diretor;

class Autenticador
{
    
    public function tentaLogin(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAutenticar($senha)){
            echo "Deixa ele passar, não olha nem mexe";
        }else{
            echo "Parece que você não quem diz que é..";
        }
    } 
}