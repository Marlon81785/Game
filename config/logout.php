<?php
    session_start();
    if (isset($_SESSION)) {//Verificar se a sessão não já está aberta.
        require('conBanco.php');
        if($valida = mysqli_query($mysqli, "UPDATE cadastro SET UsrSession = 0 WHERE UsrEmail = '$_SESSION[UsrEmail]' ")){
            echo("Desconectado");
        }
        
        session_destroy();
        header('Location: ../index.php');
    }
?>