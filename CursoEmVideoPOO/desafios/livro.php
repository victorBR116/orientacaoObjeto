<?php 

require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\pessoa.php";
require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\interface.php";

class livro implements publicacao{
    private  $titulo;
    private  $autor;
    private  $totpaginas;
    private $paginaatual;
    private  $aberto;
    private  $leitor;
 
    public function detalhes(){
        echo "<hr> Esses são alguns detalhes do livro: " . $this->titulo . "<br>escrito por: " . $this->autor;
        echo "<br>Paginas: " . $this->totpaginas . " Atual " . $this->getPaginaAtual();
        echo "<br>sendo lido por: " . $this->leitor->getNome(); 
    }

    function __construct($titulo, $autor, $totpaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totpaginas = $totpaginas;
        $this->aberto = false;
        $this->paginaatual = 0;
        $this->leitor = $leitor;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getTotpaginas(){
        return $this->totpaginas;
    }

    public function getPaginaAtual(){
        return $this->paginaatual;
    }

    public function getAberto(){
        return $this->aberto;
    }

    public function getLeitor(){
        return $this->leitor;
    }

    public function setDetalhes($detalhes){
        $this->detalhes = $detalhes;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function setTotpaginas($totpaginas){
        $this->totpaginas = $totpaginas;
    }

    public function setPaginaAtual($paginaatual){
        $this->paginaatual = $paginaatual;
    }

    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }

    public function abrir()
    {
        $this-> aberto = true;
    }

    public function avancarpagina()
    {
     $this->paginaatual++;   
    }

    public function fechar()
    {
        $this->aberto = false;
    }

    public function folhear($p)
    {
        if($p > $this->totpaginas){
            $this->paginaatual = 0;
        }else{
            $this->paginaatual = $p;
        }
    }
    public function voltarPagina()
    {
        $this->paginaatual --;
    }
}