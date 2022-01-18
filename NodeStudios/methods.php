
<?php

///Metodos públicos, Privados e protegidos

///publico é o mais permissivo de todos, com ele conseguimos acessar em qualquer classe

///privado só conseguimos acessar o valor ou a variavel que estiver dentro da mesma classe

///protected só conseguimos acessar o valor fora da classe caso estivermos setando ou pegando ele

class Veiculo{
    public $modelo;
    public $ano;
    public $cor;

    public function Andar(){
        echo "Andou";      
    }

    public function Parar(){
        echo "Parou";
    }
}

class Carro extends Veiculo{

    public function FecharPorta(){
        echo "fechou a porta";
    }
}

class Moto extends Veiculo{
    
    public function Bolololo(){
        echo "Fez o tal do bololol";
    }

}

$primeiroVeiculo = new Carro();
$primeiroVeiculo->modelo = "Savero";
$primeiroVeiculo->ano = 2008;
$primeiroVeiculo->cor = "Preto";

$primeiroVeiculo->Parar();
$primeiroVeiculo->FecharPorta();

$primeiraMoto = new Moto();
$primeiraMoto->modelo = "CG 150CC";
$primeiraMoto->ano = "2018";
$primeiraMoto->cor = "Preta";

$primeiraMoto->Bolololo();
$primeiraMoto->Andar();


