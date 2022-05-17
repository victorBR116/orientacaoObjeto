<?php
interface controlador {
    public  function ligar();
    public  function desligar();
    public  function abrirMenu();
    public  function fecharMenu();
    public  function maisVolume();
    public  function menosVolume();
    public  function ligarMudo();
    public  function desligarMudo();
    public  function play();
    public  function pause();


}
//aprendendo sobre encapsulamento.
///criaremos um controlador que vai realizar as funções a baixo
//controlador - ligar, Desligar, abrir menu, fechar menu, mais volume, menos volume, ligar mudo, desligar mudo, play, pause.
///atribustos privados para encapsulamento