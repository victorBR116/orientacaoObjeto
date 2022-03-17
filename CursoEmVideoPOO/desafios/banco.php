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
            echo "<p>Conta em débito</p>";
        }if($this->saldo > 0){
            echo "<p>zere a conta para fecha-lá</p>";
        }else{
            $this->status = false;
            
        }    
    }

    public function depositar($valorADepositar){
        if($valorADepositar < 0){
            echo "<p>valor a depositar precisa ser positivo</p>";
            return;
        }
        // apenas para exemplo: echo "Saque efetuado com sucesso na conta " . $this->getTipo();
        $this->saldo +=  $valorADepositar;
    }

    public function sacar($valorASacar){
        if($valorASacar < 0 ){
            print "<p>saques precisam ser positivos</p>";
            return;
        }
        if(($valorASacar - $this->saldo) > 0){
            print "<P>Saldo insuficiente</p>";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function mensalidadeCC(){
        if($this->tipo == 1){
            if($this->saldo < 15.90){
                print "<p>Saldo insuficiente para debitar a mensalidade, sua conta expira em 30 dias</p>";
              
            }
            $valorMensalidade = 15.90;
            $this->saldo -= $valorMensalidade;
            
            return;
        }

        print "<p>Conta Poupança não tem mensalidade!</p>";
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
