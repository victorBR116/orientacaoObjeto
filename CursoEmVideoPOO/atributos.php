<?php

class Caneta{
    public $modelo;
    public $cor;
    // private $ponta;
    protected $carga;
    protected $tampada;
   
    public function rabiscar() {
        if ($this->tampada == true){
            echo "Não dá!!! Caneta está tampada";
        }else{
            echo "<p>rabiscou<p/>";
        }
    }

    public function destampada(){
        $this->tampada = false;

    }

    public function tampar(){
        $this->tampada = true;
    }
}




//exercicio criar uma rotina com POO