<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Pessoa;
use Alura\Banco\CPF;
use Alura\Banco\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private  $endereco;
    
    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
    public function recuperaEndereco()
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === "SenhadoUsuario";
    }
}