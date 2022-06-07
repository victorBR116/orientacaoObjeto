<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livro e pessoa</title>
</head>
<body>
    <pre>
<?php 
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\pessoa.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\livro.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\interface.php";

    $p[0] = new pessoa("Godofredo", 20, "Homi");
    $p[1] = new pessoa("Carlindo", 40, "Homi");
    $p[2] = new pessoa("katiucia", 45, "Homi");

    $li[0] = new livro("Manual do nerd moderno ", " Victor Santos", 150, $p[0]);
    $li[1] = new livro("Lets Bora ", " Pedro Sampaio", 120, $p[1]);
    $li[2] = new livro("Como ligar o Cornase ", "Victor Santos ", 320, $p[2]);

    
    $li[0]->abrir();
    $li[0]->folhear(50);
    $li[0]->voltarPagina();
    $li[0]->detalhes();

    ?>
    </pre>
</body>
</html>