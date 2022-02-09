<?php

namespace Alura\Banco\Modelo\Conta;

trait Acessando
{
     public function __get($nomeAtributo)
    {
      
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

}