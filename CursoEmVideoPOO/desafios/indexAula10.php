<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
</head>
<body>
    <pre>
    <?php 
        require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\pessoaaula10.php";
        require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\alunoaula10.php";
        require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\professorAula10.php";
        require_once "E:\Estudos\Alura\Orientação Objeto\CursoEmVideoPOO\desafios\Funcionarioaula10.php";


        $j[0] = new Aluno(true, "123131", "Victor", 21);
        $j[0] = new Pessoa("Victor Hugo", 21, "M");
        $j[1] = new Funcionario('Limpeza', true);
        $j[2] = new pessoa('victor', 14, 'M');
        $j[3] = new Professor('Ingles', 2100 );
       /* $j[0]->setNome("Victor Hugo Santos");
        $j[0]->setIdade(19);
        $j[0]->setSexo("M");*/

        $j[0]->setIdade(12);
        $j[3]->setNome("carlos");
        $j[3]->setIdade(43);
        $j[3]->setSexo("M");
        //$j[3]->receberAumento(234);
        //$j[1]->mudarTrabalho();
        //$j[1]->mudarTrabalho()
        //$j[3]->setsalario(123);
        // $j[3]->getsalario();    
        var_dump($j[3]);
    ?>
    </pre>
</body>
</html>