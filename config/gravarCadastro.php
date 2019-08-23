<?php
    
    if(isset($_POST['UsrEmail'])){
                    
        require('conBanco.php');
                        
            if($valida = mysqli_query($mysqli, "INSERT INTO cadastro (UsrEmail, UsrSenha, Nome, UsrPoints, UsrSession) VALUES ('$_POST[UsrEmail]', '$_POST[UsrSenha]', '$_POST[Nome]', 0, 0)")){
                header('Location: funcional.php');//usuario cadastrado com sucesso, abrir pagina de usuario logado
            }else{
                echo "Não foi possivel gravar a mensagem...<br><a href='../index.html>Index</a>'";      
            }
                
    }else{
        echo("");// vazio
    }



?>