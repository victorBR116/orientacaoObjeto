<?php

class Banco {
    public float $numConta;
    protected bool $tipo;
    private string $dono;
    private float $saldo;
    private bool $status;

    public function __construct($n, $t, $d, $s, $sta)
    {
        $this-> numConta = $n;
        $this-> tipo = $t;
        $this-> dono = $d;
        $this-> saldo = $s;
        $this-> status = $sta;
    }
    
    public function abrirConta(){
        $this->numConta = 0000-0;
        $this->tipo = true;
        $this->dono = "Novo usuario"; 
        if($this->tipo = false){
            $this->saldo = 150;
        }return;
        $this->saldo = 50;
        $this->status = true;
    }

    public function fecharConta(){
        if($this->saldo < 0){
            echo "Você precisa fechar a conta com o saldo positivo";
        }else{
            $this->status = "Conta fechada";
        }    
    }

    public function depositar($valorADepositar){
        if($valorADepositar < 0){
            echo "valor a depositar precisa ser positivo";
            return;
        }
        $this->saldo =+ $valorADepositar;
    }

    public function sacar($valorASacar){
        if($this->$valorASacar < 0 ){
            print "saques precisam ser positivos";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function mensalidadeCC(){
        if($this->tipo == 1){
            $this->saldo =- 15.90;
        }else{
            print "Conta Poupança não tem mensalidade!";
        }
    }

    public function getConta(){
        return $this->numConta;
    }

    public function setConta($con){
        $this->numConta = $con;
    }

    public function getTipo(){
        return $this->numConta;
    }

    public function setTipo($t){
        $this->tipo = $t;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($don){
        $this->dono = $don;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($sal){
        $this->saldo = $sal;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($stats){
        $this->status = $stats;
    }
}
