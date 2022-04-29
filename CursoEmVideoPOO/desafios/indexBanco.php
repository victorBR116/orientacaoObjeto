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
    //adicionar a parte funcional do abrir um banco att.
    //adicionar abrir conta - refaturar 
    
    $c1 = new Banco(5555, true, "Victor Santos", 2000, true); 
    $c1->mensalidadeCC();
    $c1->getTipo();
    $c1->depositar(1000);
    $c1->getSaldo();
    var_dump($c1);

    

    ?>
    </pre>
</body>
</html>