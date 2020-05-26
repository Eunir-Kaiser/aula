<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke Métodos e atributos</title>
    </head>
    <body>
        <?php
         require './Usuario.php';
         $usuario = new Usuario();
         $usuario->setUsuario("Eunir", "Eunirk@gmail.com");
         echo $usuario->getUsuario();
         
         $usuario->setNota(5, 2);
         echo $usuario->getNota();
        ?>
    </body>
</html>
