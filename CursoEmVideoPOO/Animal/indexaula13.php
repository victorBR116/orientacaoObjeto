<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 13b</title>
</head>
<body>
    <?php 
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Animal\mamiferoAula13.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Animal\lobo13.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Animal\cachorro13.php";
    $c = new Cachorro();
    $c->emitirSom();
    $c->reagirIdade(17, 4.5);
    //var_dump($c);
    ?>
</body>
</html>