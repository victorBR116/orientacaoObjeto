<?php 

interface publicacao{
    public function abrir();
    public function fechar();
    public function folhear($p);
    public function avancarpagina();
    public function voltarPagina();
    
}



