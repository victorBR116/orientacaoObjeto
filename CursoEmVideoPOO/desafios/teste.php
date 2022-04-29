<?php
//apenas um exemplo apagar em breve
class Teste{
    public $mostrar;

    public function recuperaMostrar(){
        return $this->mostrar;
    }
    public function settMostrar($m){
        $this->mostrar = $m;
    }
}

$imprimir = new Teste();


$imprimir->settMostrar(".salve");

echo   $imprimir->recuperaMostrar();