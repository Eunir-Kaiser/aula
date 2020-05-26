<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        // put your code here
        require './Disciplina.php';
        
        $disciplina = new Disciplina("Eunir", 2, 6);
        echo $disciplina->situacao();
        echo $disciplina->situacaoAluno();
        ?>
    </body>
</html>
