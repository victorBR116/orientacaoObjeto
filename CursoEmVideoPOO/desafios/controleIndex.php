<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle</title>
</head>
<body>
    <pre>
    <?php
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\controleRemoto.php";
    //resolver a questão das class refaturar
    $controle2 = new Controle(true, "sem função");

    $controle2->desligarControle();
    $controle2->trocouDeCanal();

    print_r($controle2);
    
    ?>
    </pre>
</body>
</html>