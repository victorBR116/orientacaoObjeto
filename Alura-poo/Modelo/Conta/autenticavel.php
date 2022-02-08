<?php

namespace  Alura\Banco\Modelo\Conta;

interface  Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}