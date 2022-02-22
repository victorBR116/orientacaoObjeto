<?php

class Caneta{
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;
   
    public function rabiscar(){
        echo "<p>rabiscou<p/>";

    }

    public function destampada(){
        $this->tampada = false;

    }

    public function tampar(){
        $this->tampada = true;
    }
}


$loja1 = new Caneta();
