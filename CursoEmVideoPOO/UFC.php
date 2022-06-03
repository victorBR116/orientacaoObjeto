<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC</title>
</head>
<body>
    <?php
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\lutador.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\luta.php";
     $l = array();
    $l[0] = new Lutador("DJ Ruivo", "Brasil", 55, 1.78, 62.9, 0, 2, 1);
    $l[1] = new Lutador("MC Kevin", "Brasil", 23, 1.70, 62.0, 4, 0, 1);
    $l[2] = new Lutador("MC Rian", "Brasil", 21, 1.79, 111.2, 0, 5, 2);
    $l[3] = new Lutador("MC Salvador", "Brasil", 21, 1.69, 68.9, 0, 0,0);
    $l[4] = new Lutador("DJ Pereira", "Brasil", 45, 1.90, 111.9, 4, 2, 0);
    $l[5] = new Lutador("MC Pedrinho", "Brasil", 21, 1.69, 70.0, 1, 0, 0);
    
    $UFC01 = new luta();
    $UFC01->marcarLuta($l[0], $l[1]);
    $UFC01->lutar();
   // $l[0]->status();
    //$l[1]->status();
    
    ?>
</body>
</html>