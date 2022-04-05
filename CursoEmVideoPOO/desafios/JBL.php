<?php
//abstrair da caixa de som
class JBL
{
    public bool $ligar;
    public string $volume;
    public bool $bluetooth;
    private string $autoFalante;

    public function __construct($l, $v, $b, $a)
    {
        $this->ligar = $l;
        $this->volume = $v;
        $this->bluetooth = $b;
        $this->autoFalante = $a;
    }
    
    public function recuperaAutofalante(){
       return $this->autoFalante;
    }
    public function setAutofalante($a){
        $this->autoFalante = $a;
    }

    public function ligarJBL(){
        $this->ligar = true;
    }

    public function abaixarVolume(){
        $this->volume = "abaixou volume";
    }

    public function aumentarVolume(){
        $this->volume = "Aumentou Volume";
    }

    public function ligarBluetooth(){
        $this->bluetooth = true;
    }

}