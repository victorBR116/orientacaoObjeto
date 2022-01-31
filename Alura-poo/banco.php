<?php

require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo/Conta.php';
require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo\Endereco.php';
require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo\Titular.php';
require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo\CPF.php';

$endereco = new Endereco('Taboão da serra', 'Saint Morritz', 'rua dos pertubado', '245');
$victor = new Titular(new CPF('123.456.789-10'), 'Victor Hugo Santos', $endereco);
$primeiraConta = new Conta($victor);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

$gabrielle = new Titular(new CPF('432.675.124-18'), 'Gabrielle', $endereco);
$segundaConta = new Conta ($gabrielle);

$endereco1 = new Endereco('Taboão da serra', 'Trianon', 'rua dos Goytacazes', '56');
$terceiraConta = new Conta(new Titular(new CPF('123.453.132-12'), 'Zenilda', $endereco1));

echo Conta::recuperaNumeroDeContas();

