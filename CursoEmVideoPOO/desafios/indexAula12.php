<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12b</title>
</head>
<body>
    <?php 
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\mamifero.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\Repitil.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\peixe.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\Aves.php";
    
    $a = new Mamifero();
    $ave = new Ave();
    $a->setPeso(10.2);
    $a->locomover();
    $ave->locomover();
    ?>
</body>
</html>