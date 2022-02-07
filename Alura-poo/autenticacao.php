<?php
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Conta\Funcionarios\Diretor;
use Alura\Banco\CPF;


require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo\autoload.php';

$autenticador = new Autenticador();

$diretor21 = new Diretor('Jão Bascelo Nunes', 
             new CPF('123.351.123-50'), 
             5000); 

$autenticador->tentaLogin($diretor21, '43121');
