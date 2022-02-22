<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá muaindo</title>
</head>
<body>
    <?php
    require_once 'atributos.php';
    
    $c1 = new Caneta();
    $c1->cor = "Preta";
    $c1->modelo = "Bic";
    $c1->ponta = 0.5;
    $c1->carga = "90%";
    $c1->tampada = false;

    $c1->rabiscar();
    $c1->tampar();
    print_r($c1);

        
    ?>
</body>
</html>