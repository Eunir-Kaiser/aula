<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        // put your code here
        require './FuncionarioProtected.php';
        require './Bonus.php';
        
        $funcionario = new Bonus();
        $funcionario->setNome("Cezar");
        $funcionario->setSalario(2500);
        echo $funcionario->verSalario();
        
        ?>
    </body>
</html>
