<?php

require 'class/products.php';
require 'models/products.php';

use models\Produto as produtoModels;
use classes\Produto as produtoClasses;

$produto = new produtoModels();
echo $produto->mostrarDetalhes() . PHP_EOL;

$produto2 = new ProdutoClasses();
$produto2->mostrarDetalhes() . PHP_EOL;