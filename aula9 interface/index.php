<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        // put your code here
        require './iCcurso.php';
        require './CursoGraduação.php';
        require './CursoPosGraduacao.php';

        $curso = new CursoGraduação();
        echo $curso->disciplina("Desenvolvimento web");
        echo $curso->professor("Cesar spark");

        $cursoPosGrad = new CursoPosGraduacao();
        echo $cursoPosGrad->disciplina("Redes");
        echo $cursoPosGrad->professor("Eduardo");
        ?>
    </body>
</html>
