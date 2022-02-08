<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Conta\Autenticavel;

class Autenticador
{
    
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)){
            echo "Deixa ele passar, não olha nem mexe";
        }else{
            echo "Parece que você não quem diz que é..";
        }
    } 
}