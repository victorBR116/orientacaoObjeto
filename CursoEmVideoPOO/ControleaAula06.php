<?php

class ControleRemoto{
    private $volume;
    private $ligado;
    private $tocando;
    
    //metodos especiais

    function __construct()
    {
        $this->volume = 50;
        $this-> ligado = false;
        $this->tocando = false;
    }

    function getVolume(){
        return $this->volume;
    }

    function setVolume($v){
        $this->volume = $v;
    }

    function getLigado(){
        return $this->ligado;
    }

    function setLigado($l){
        $this->ligado = $l;
    }

    function getTocando(){
        return $this->tocando;
    }

    function setTocando($t){
        $this->tocando = $t;
    }
}