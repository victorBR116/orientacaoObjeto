<?php

use Animal as GlobalAnimal;

abstract class Animal{
    private $membros;
    private $tipo;

    public function comer(){
        echo "animal está comendo";
    }
}