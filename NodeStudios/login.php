<?php

class Login{
    private $email;
    private $senha;
    private $nome;


    public function __construct($email, $senha, $nome){
        $this-> nome= $nome;
        $this->setEmail($email);
        $this->setSenha($senha);

    }
    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "hugov6167@gmail.com" and $this->senha=="12345678"){
            echo "Login efetuado com sucesso!";
        }else{
            echo "Senha ou email inválido";
        }
    }
}

$usuario = new Login("hugov6167@gmail.com", "12345678", "Victor Hugo Santos");
$usuario->Logar();
echo PHP_EOL.  $usuario->getNome();