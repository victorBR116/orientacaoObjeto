<?php

class Animal{
    public function Andar(){
        echo "Animal andou!";
      
    }
    
    public function descansar(){
    echo "Animal está descansando";
    }
}

class Zebra extends Animal{
    public function Andar(){
        echo $this->descansar();
    }
}

$zebra = new Zebra();
$zebra->Andar();