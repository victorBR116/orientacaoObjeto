<?php

abstract class Animal{
    private $peso;
    private $idade;
    private $membros;

    abstract function emitirSom();

    abstract public function locomover();

    abstract public function alimentar();

    public function getPeso(){
        return $this->peso;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getMembros(){
        return $this->membros;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function setMembros($membros){
        $this->membros = $membros;
    }
}