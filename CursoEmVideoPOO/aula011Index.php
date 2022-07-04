<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 011</title>
</head>
<body>
    <pre>
    <?php
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Pessoa011.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Visitante011.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\AlunoAula11.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\Bolsista011.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\AlunoTecnico11.php";
    require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\professor011.php";
    
    $v1 = new Visitante();
    $v1->setNome("Raffa Moreira");
    $v1->setIdade(23);
    $v1->setSexo("M");

    $a1 = new Aluno();
    $a1->setNome("Guilherme");
    $a1->setIdade(52);
    $a1->setSexo("M");
    $a1->setCurso("Literatura");
    $a1->setMatricula(2323);
    $a1->PagarMensalidade();

    $b1 = new Bolsista();
    $b1->setMatricula(2345);
    $b1->setNome("Autina");
    //$b1->setBolsa(13.2);
    $b1->setCurso("Administração");
    $b1->setIdade(14);
    $b1->setSexo("F");
    $b1->PagarMensalidade();
    var_dump($b1);


    //$a2 = new Tecnico();

    //$p1 = new Professor();

    ?>
    </pre>
</body>
</html>