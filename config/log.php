<?php    
    if(isset($_POST['UsrEmail']) && isset($_POST['UsrSenha'])){
        require('conBanco.php');
        $queryUser1 =  mysqli_query($mysqli, "SELECT * FROM cadastro WHERE UsrEmail = '$_POST[UsrEmail]' AND UsrSenha = '$_POST[UsrSenha]' LIMIT 1");
        if(mysqli_num_rows($queryUser1) != 0){
            if($queryUser = mysqli_fetch_assoc($queryUser1)){
                session_start();
                $_SESSION['UsrEmail'] = $_POST['UsrEmail'];
                $_SESSION['Nome'] = $queryUser['Nome'];
                $_SESSION['UsrPoints'] = $queryUser['UsrPoints'];
                if($valida = mysqli_query($mysqli, "UPDATE cadastro SET UsrSession = 1 WHERE UsrEmail = '$_POST[UsrEmail]' ")){
                    header('Location: logado.php');
                }
                
                //echo $queryUser['UsrNome'].', você conseguiu completar todo o passo a passo do sistema de Login!<br>Parabéns!!!';
                //header('Location: logado.php');
            }else{
                echo 'Nenhum usuário com esses dados';
                echo "<br><a href='../index.html>Index</a>'";
            }
        }else{
            echo 'Nenhum usuário cadastrado com esses dados.';
            echo "<br><a href='../index.html>Index</a>'";
        }
        
    }else{
        //return false;
        header('Location: ../index.html');
    }

?>