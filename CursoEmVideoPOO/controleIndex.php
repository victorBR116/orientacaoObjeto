<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>controleaula06</title>
</head>
<body>
<h1> Controlezin </h1>
    <pre>
    <?php
    require_once"E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\controladoraula06.php";
    
    $c = new ControleRemoto();
    $c->desligar();
    $c->maisVolume();
    $c->abrirMenu();

    ?>
    </pre>
</body>
</html>