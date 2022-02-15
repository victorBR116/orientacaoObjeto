<?php

class Bolo{
    public string $ingredientes;
    public string $sabor;
    public string $cobertura;


    public function abc(){
        return $this->sabor;
    }
}
$primeiroBolo = new Bolo;
$primeiroBolo->ingredientes = "Sem lactose";
$primeiroBolo->sabor = "Chocolate";
$primeiroBolo->cobertura = "Chocolate" ;

var_dump($primeiroBolo);

echo $primeiroBolo->ingredientes;