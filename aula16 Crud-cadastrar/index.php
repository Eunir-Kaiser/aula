<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <h1>Cadastrar novo Usuário</h1>
        <?php
        require './Conn.php';

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        var_dump($dados);

        if (!empty($dados['SendCadUser'])):
            unset($dados['SendCadUser']);

            $conn = new Conn();
            $cadastre = "INSERT INTO usuarios (nome, email, usuario, senha, created) VALUES (:nome, :email, :usuario, :senha, NOW())";

            $cadastrar = $conn->getConn()->prepare($cadastre);

            $cadastrar->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $cadastrar->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $cadastrar->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR);
            $cadastrar->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);

            $cadastrar->execute();

            if ($cadastrar->rowCount()):
                echo "Cadastro realizado";
            endif;

        endif;
        ?>
        <form name="CadUsuario" action="" method="POST">
            <label> Nome: </label>
            <input type="text" name="nome" placeholder="Nome completo"><br><br>

            <label> E-mail: </label>
            <input type="email" name="email" placeholder="Informe seu e-mail"><br><br>

            <label> Usuário: </label>
            <input type="text" name="usuario" placeholder="Usuário para acesso ao sistema"><br><br>

            <label> Senha: </label>
            <input type="password" name="senha" placeholder="Senha"><br><br>

            <input type="submit" value="Cadastrar" name="SendCadUser">


        </form>
    </body>
</html>
