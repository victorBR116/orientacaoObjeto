<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <pre>
    <?php 
    require_once "banco.php";

    $c1 = new Banco(5555, true, "Victor Santos", 500, true); 
    $c1->getSaldo();
    $c1->mensalidadeCC(15.90);

    var_dump($c1);



    ?>
    </pre>
</body>
</html>