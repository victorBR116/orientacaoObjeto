<?php

use Alura\Banco\Endereco;

require_once 'E:\Estudos\Alura\Orientação Objeto\Alura-poo\autoload.php';

$endereco1 = new Endereco('Taboão da serra', 'Distrito 23', 'Rua Noé Savio Santos', '450 B');
$endereco2 = new Endereco('São Paulo', 'Solimões', 'Rua José Abreu Carvalho', '792');

echo $endereco1 . PHP_EOL;
echo $endereco2 . PHP_EOL;

