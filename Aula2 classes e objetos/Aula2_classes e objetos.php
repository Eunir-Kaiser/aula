<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
         require './Usuario.php';
         $usuario = new Usuario();
         echo $usuario->getDadosUser("Eunir", "eunirk@gmail.com");
        ?>
    </body>
</html>
