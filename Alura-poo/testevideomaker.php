<?php
require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo\autoload.php';

use Alura\Banco\CPF;
use Alura\Banco\Modelo\Conta\Funcionarios\VideoMaker;

$functionario14312 = new VideoMaker('José santos carvalho', new CPF('213.532.764-43'), 2000);

echo $functionario14312->recuperaNome();
