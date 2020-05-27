<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <h1>Listar usuário</h1>
        <?php
        require './Conn.php';
        $conn = new Conn();

        $result_user = "SELECT * FROM usuarios";
        $resultado_user = $conn->getConn()->prepare($result_user);
        $resultado_user->execute();

        while ($row_user = $resultado_user->fetch(PDO::FETCH_ASSOC)):
            echo "ID:" . $row_user['id'] . "<br>";
            echo "NOME:" . $row_user['nome'] . "<br>";
            echo "E-MAIL:" . $row_user['email'] . "<br>";

        endwhile;
        ?>        

    </body>
</html>
