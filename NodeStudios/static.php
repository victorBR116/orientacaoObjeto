<?php

class Login{

    public $nome;
    
    public static $user;

    public static function verificaLogin(){
        echo "O usuário " . self::$user. " está logado";
    }
    public function sairDoSistema(){
        echo "Usuário " . $this->nome . " saiu do sistema.";
    }
}


$admin = new Login();
$admin->nome = "Admin";
$admin->sairDoSistema();