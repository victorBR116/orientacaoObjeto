<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá muaindo</title>
</head>
<body>
    <pre>
    <?php
    require_once 'E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\controleRemoto.php';
    require_once 'E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\atributos.php';
    
    $c1 = new Caneta();
    $c1->cor = "Preta";
    $c1->modelo = "Bic nova embalagem";
    $c1->rabiscar();
    $c1->destampada();
    print_r($c1);
        
    ?>
    </pre>
</body>
</html>