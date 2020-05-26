<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        // put your code here
        require './FuncionarioPrivado.php';
        
        $funcionario = new FuncionarioPrivado();
        $funcionario->setNome("Eunir");
        $funcionario->setSalario(1000);
        echo $funcionario->verSalario();
        ?>
    </body>
</html>
