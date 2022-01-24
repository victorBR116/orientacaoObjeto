<?php

class Cliente{
    public $nome;
    public $endereco;
}

class Pedido{
    public $numero;
    public $cliente;
    public $estabelecimento;
}

$cliente1 = new Cliente();
$cliente1->nome = "Victor Hugo Santos";
$cliente1->endereco = "Rua solimões, 323 - Embu das Artes - SP";

$pedido1 = new Pedido();
$pedido1->numero = 116;
$pedido1->cliente = $cliente1;
$pedido1->estabelecimento = "Subway - Embu";

$bd = array(
    'nome_Cliente' => $pedido1->cliente->nome,
    'endereço_Cliente' => $pedido1->cliente->endereco,
    'numero_Cliente' => $pedido1->numero,
    'estabelecimento_App' => $pedido1->estabelecimento
);

var_dump($bd);