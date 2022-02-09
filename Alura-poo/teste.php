<?php
require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo\autoload.php';

use Alura\Banco\CPF;
use Alura\Banco\Modelo\Conta\Funcionarios\Desenvolvedor;
//use Alura\Banco\Modelo\Conta\Funcionarios\Funcionario;


$umdesenvolvedor = new Desenvolvedor('Victor Hugos Santos', new CPF('123.456.789-10'), 1200);

echo $umdesenvolvedor->nome;
