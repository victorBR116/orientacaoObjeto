<?php
//ocorrência normal que afeta o funcionamento da aplicação
//exeption é a classe para base todas exeções
//message, code, file, line;

class Newslatter{
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este email é inválido", 1);
        }else{
            echo "Email cadastrado com sucesso!";
        }
    }
}

try { 
    
$newslatter1 = new Newslatter();
$newslatter1->cadastrarEmail("hugov6167");
} catch (Exception $e){
    echo "Mensagem:" . $e->getMessage() . PHP_EOL;
    echo "Código:" . $e->getCode() . PHP_EOL;
    echo "Linha:" . $e->getLine() . PHP_EOL;
    echo "Arquivo" . $e->getFile() . PHP_EOL;
}