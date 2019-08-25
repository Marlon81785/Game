<?php

    set_time_limit(3);
    require('conBanco.php');
    $queryUser2 =  mysqli_query($mysqli, "SELECT * FROM cadastro WHERE UsrSession = 1");
    for($p=0;$p<20;$p++){
        if(mysqli_num_rows($queryUser2) !== 0){
                                                
            if($queryUser3 = mysqli_fetch_assoc($queryUser2)){
                                                    
                echo $queryUser3['UsrNome'];echo"<br><br><br>";
                                                    
                                                    

            }
                                                
        }
    }
    //header("Refresh: 2; url = logado.php");
?>