<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa de som</title>
</head>
<body>
    <pre>
    <?php 
    //exercicio guanabara
    require_once "JBL.php";
    
    $jblgo2 = new JBL(false, "Baixo", true, "Auto falante 4089090");
    
    $jblgo2->abaixarVolume();
    $jblgo2->ligarJBL();
    $jblgo2->setAutofalante("Auto Falante JBL GO 2");
    
    print_r($jblgo2);
    ?> 
    </pre>
</body>
</html>