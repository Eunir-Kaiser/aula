<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './Conn.php';

        $conn = new Conn();
        $conn->getConn();
        

        $email = "eunirk@gmail.com";
        $usuario = "Eunir";
        $senha = "123";
        
        try {
            $cadastre = "INSERT INTO usuarios (email, usuario, senha, created) VALUES (:email, :usuario, :senha, NOW())";
            
            $cadastrar = $conn->getConn()->prepare($cadastre);
            
            $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
            $cadastrar->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $cadastrar->bindParam(':senha', $senha, PDO::PARAM_STR);
            
            $cadastrar->execute();
           
            if ($cadastrar->rowCount()):
                echo "Cadastro realizado";
            endif;
            
            
        } catch (Exception $ex) {
            echo 'Mensagem:' . $ex->getMessage();
            die;
        }
        ?>
    </body>
</html>
