<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './cheque.php';
        require './ChequeComum.php';
        require './ChequeEspecial.php';
        //$cheque = new cheque(100, "Comum");
        //echo $cheque->verValor();
        
        $chequeComum = new ChequeComum(100, "Comum");
        echo $chequeComum->calcularJuros();
        
        $chequeEspecial = new ChequeEspecial(100.10, "Especial");
        echo $chequeEspecial->calcularJuros();
        ?>
    </body>
</html>
