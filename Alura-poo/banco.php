<?php

require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo/Conta.php';
require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo\Titular.php';
require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo\CPF.php';


$victor = new Titular(new CPF('123.456.789-10'), 'Victor Hugo Santos');
$primeiraConta = new Conta($victor);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

$gabrielle = new Titular(new CPF('432.675.124-18'), 'Gabrielle');
$segundaConta = new Conta ($gabrielle);

$terceiraConta = new Conta(new Titular(new CPF('123.453.132-12'), 'Zenilda'));

echo Conta::recuperaNumeroDeContas();

