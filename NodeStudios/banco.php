<?php

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function SetSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return  $this->saldo;
    }

   abstract protected function Sacar($s);

   abstract protected function Depositar($d);
}


class Santander extends Banco{
    
    public function Sacar($s) {
        $this->saldo -= $s;
        echo " Sacaste:" . $s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo " Depositou:" . $d;
    }

}

 $clienteSantander = new Santander();
 $clienteSantander->SetSaldo(1000) . PHP_EOL;
 echo " Saldo:" . $clienteSantander->getSaldo();
 $clienteSantander->Sacar(135);

 echo " Saldo:" . $clienteSantander->getSaldo();

 $clienteSantander->Depositar(1020);
 
 echo " Saldo:" . $clienteSantander->getSaldo();