<?php
//exemplo aula 3
class Caneta {
    private string $modelo;
    private string $cor;
    private float $ponta;
    public bool $tampada;

    public function __construct($m, $c, $p){ // Metodo construtor - no video original o mano guanabs explica que você pode ultilizar o nome da classe no construtor porém isso não é recomendado pois sera depreciado em breve...
    $this->modelo = $m;
    $this->cor = $c;
    $this->ponta = $p;
    $this->tampar();
    }
  
    public function tampar(){
        $this->tampada = true;
    }

    public function getModelo(){
       return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }
}