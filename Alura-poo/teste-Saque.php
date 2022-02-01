<?php
require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo\autoload.php';

use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\CPF;
use Alura\Banco\Endereco;



$conta34 = new ContaPoupanca(
    new Titular
    (new CPF('123.456.987-78'),
     'João Gomes', 
     new Endereco('São josé do rio preto', 'Zona rual', 'Perdidos no amor', 'Lote 7 - Fazenda do jão'))
);

$conta34->deposita(1000);
$conta34->saca(100);

echo $conta34->recuperaSaldo();


