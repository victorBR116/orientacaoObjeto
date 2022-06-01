<?php 

class Lutador {
    //atributos
     private string $nome;
     private string $nacionalidade;
     private $idade, $altura, $peso;
     private $categoria, $vitoria, $derrota, $empate;
    //metodos
    function apresentar()
    {
        echo "<p>----------------------------</p>";
        echo "<p> E agora o lutador " . $this->getNome();
        echo " diretamente do " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "KG";
        echo "<br> Ele tem " . $this->getVitorias() . " vitorias, " . $this->getDerrotas() . " derrotas e " . $this->getEmpate() . " empates ";

    }

    function status()
    {
        echo "<p>-------------------------</p>";
        echo "<p>" . $this->getNome() . " do peso " . $this->getCategoria(); 
        echo "e já ganhou " . $this->getVitorias() . " vezes, ";
        echo " perdeu " . $this->getDerrotas() . " vezes e ";
        echo " empatou " . $this->getEmpate() . " vezes ";
    }

    function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() +1);
    }

    function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() +1);
    }
    function empatarLuta()
    {
        $this->setEmpate($this->getEmpate() +1);
    }

    //metodos especiais

    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitoria = $vi;
        $this->derrota = $de;
        $this->empate = $em;
    }

    function getNome(){
        return $this->nome;
    }
    
    function getNacionalidade(){
        return $this->nacionalidade;
    }

    function getIdade(){
        return $this->idade;
    }

    function getAltura(){
        return $this->altura;
    }

    function getPeso(){
        return $this->peso;
    }

    function getCategoria(){
        return $this->categoria;
    }

    function getVitorias(){
        return $this->vitoria;
    }

    function getDerrotas(){
        return $this->derrota;
    }

    function getEmpate(){
        return $this->empate;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    function setAltura($altura){
        $this->altura = $altura;
    }

    function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(){
        if($this->peso < 52.2){
            $this->categoria = "Com esse peso você não consegue lutar.";
        }elseif ($this->peso <= 70.3){
            $this->categoria = "leve ";
        }elseif($this->peso <= 83.9){
            $this->categoria = "médio ";
        }
        elseif($this->peso <= 120.2){
            $this->categoria = "pesado ";
        }else {
            $this->categoria = "Com esse peso você não consegue lutar.";
        }
    }

    function setVitorias($vitoria){
        $this->vitoria = $vitoria;
    }

    function setDerrotas($derrota){
        $this->derrota = $derrota;
    }

    function setEmpate($empate){
        $this->empate = $empate;
    }
}