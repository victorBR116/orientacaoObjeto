<?php

require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo\autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\{CPF};
use Alura\Banco\Modelo\Conta\Funcionarios\{Gerente, Diretor, Desenvolvedor, VideoMaker};

$funcionario111 = new Desenvolvedor(
    'Gledson Robson Matos', 
    new CPF('432.545.678-87'),
    1200
);
$funcionario112 = new Gerente(
    'Ubiratama Araujo de Souza',
    new CPF('321.591.789-54'), 
    8976
);

$funcionario1 = new Diretor(
    'Rodrigo Baltazar', 
    new CPF('123.563.132-25'), 
    2300
);

$funcionario450 = new VideoMaker(
    'Josue Ribeiro Santana',
    new CPF('492.723.012-43'),
    1800
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacoesDe($funcionario111);
$controlador->adicionarBonificacoesDe($funcionario112);
$controlador->adicionarBonificacoesDe($funcionario1);
$controlador->adicionarBonificacoesDe($funcionario450);

echo $controlador->recuperaTotal();