<?php

require './Conn.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)):
    $conn = new Conn();
    $resul_user = "DELETE FROM usuarios WHERE id=:id";

    $resultado_del_user = $conn->getConn()->prepare($result_user);
    $resultado_del_user->bindParam(':id', $id);
   
    
    if( $resultado_del_user->execute()):
        $_SESSION['msg'] = "< style='color:green;'>Registro apagado com sucesso</p>";
        header("Location: index.php");
        
     endif;
else:
    
endif;
