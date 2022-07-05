<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14</title>
</head>
<body>
    <pre>
    <?php
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Video14.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\pessoa14.php";
    
    $v[0] = new Video("Aprenda a beijar");
    $v[1] = new video("Como chorar no banho");
    $v[2] = new video("Entenda de uma vez por todas como falar em público");

    var_dump($v);

    ?>
    </pre>
</body>
</html>