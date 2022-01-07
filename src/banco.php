<?php

require_once 'E:\Estudos\Alura\Orientação Objeto\src/Conta.php';

$primeiraConta = new Conta('123.456.789.10', 'Victor Hugo Santos');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

$segundaConta = new Conta('432.675.124.18', 'Gaby');
