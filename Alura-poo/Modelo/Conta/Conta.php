<?php
namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    public $titular;
    protected float $saldo = 0; 
    private static $numeroDeContas = 0;
    

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;  
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca( float $valorASacar): void
    {
        $tarifaDeSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaDeSaque;
        if ($valorSaque > $this -> saldo){
            echo "Saldo indisponível";
            return;
        }
        
        $this->saldo -= $valorSaque;
     }
    
    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            echo "O valor do depósito precisa ser positivo";
            return;
        }
           
        $this->saldo +=$valorADepositar;
    }
    
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string 
    {
        return $this->titular->recuperaNome();

    }
    
    public function recuperaCpfTitular(): string 
    {
        return $this->titular->recuperaCpf();

    }

    public static function recuperaNumeroDeContas():int
    {
        return self::$numeroDeContas;

        
    }

    abstract protected function percentualTarifa(): float;
}
 