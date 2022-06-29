<?php

require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Animal\lobo13.php";

class Cachorro extends Lobo2{

    public function emitirSom()
    {
        echo "<p>au au au au</p>";
    }

    public function reagirFrase($frase)
    {
        if($frase == "Hora de comer" || $frase == "Hora de passear"){
            echo "<p>Abandar e latir.</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }

    public function reagirHora($hora, $min)
    {
        if($hora < 12){
            echo "<p>Abanar.</p>";
        } elseif($hora >= 18 ){
            echo "<p>Ignorar.</p>"; 
        } else {
            echo "<p>Abanar e latir.</p>";
        }
    }

    public function reagirDono($dono)
    {
        if($dono){
            echo "<p>Abanar.</p>";
        }else{
            echo "<p>Rosnar.</p>";
        }
    }

    public function reagirIdade($idade, $peso)
    {
        if($idade < 5){
            if($peso < 10){
                echo "<p>Abanar.</p>";
            }else{
                echo "<p>Latir.</p>";
            }
        }else{
            if($peso < 10){
                echo "<p>Rosnar.</p>";
            }else{
                echo "<p>Ignorar.</p>";
            }
        }
    }
}