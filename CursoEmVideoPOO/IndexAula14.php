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
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Visualizador14.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Visualizacao.php";
    
    $v[0] = new Video("Aprenda a beijar");
    $v[1] = new video("Como chorar no banho");
    $v[2] = new video("Entenda de uma vez por todas como falar em público");

    $p[0] = new Visualizador("Joanel", 17, "M", "231z");
    $p[1] = new Visualizador("Sophia", 32, "F", "shp123");

    $visu[0] = new Visualizacao($p[1], $v[0]);
    $visu[1] = new Visualizacao($p[1], $v[1]);

    $visu[0]->avaliar();
    //$visu[0]->avaliarNota();
    $visu[0]->avaliarPoc(85);
    print_r($visu);

    ?>
    </pre>
</body>
</html>