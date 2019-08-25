<!DOCTYPE html>

<html>
    <head>
        <title>Pagina de buscar jogador</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/projetojogo/css/logado.css" media="screen" >
        

    </head>

    <body>
        <div id="master">
            <div id="top">
                <br><br><p id="temporario" >MEUS DADOS</p><br>
                <table>
                    <tr>
                        <td>Usuario online: </td>
                        <td><?php session_start();echo $_SESSION['UsrNome'];?></td><br>
                        
                    </tr>
                    <tr>
                        <td>EMAIL: </td>
                        <td><?php echo $_SESSION['UsrEmail'];?></td>
                    </tr>
                    <tr>
                        <td>PONTOS: </td>
                        <td><?php echo $_SESSION['UsrPoints'];?></td>
                    </tr>
                </table>
                <br>
                
                <?php
                    echo " <a href='logout.php'>Sair</a>";
                ?>
                
                
            </div>

            <div id="mid">
                    <br><br><p id="temporario" >JOGADORES ONLINE</p><br>
                    <table>
                        <tr>
                            <td>JOGADORES ONLINE: </td>
                            <td id="teste" >
                            
                                <?php
                                    
                                    /*
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
                                    header("Refresh: 2; url = logado.php");
                                    */

                                ?>   
                                    
                                <script>
                                    function ajx(){
                                        var ajax = new XMLHttpRequest(); // cria o objeto XHR
                                        ajax.onreadystatechange = function(){
                                           // verifica quando o Ajax for completado
                                           if(ajax.readyState == 4 && ajax.status == 200){
                                              document.getElementById("teste").innerHTML = ajax.responseText; // atualiza o span
                                              setTimeout(ajx, 2000); // chama a função novamente após 2 segundos
                                           }
                                        }
                                        ajax.open("GET", "jogadoresOnline.php"); // página a ser requisitada
                                        ajax.send(); // envia a requisição
                                    }
                                    ajx(); // chama a função
                                </script>
                                    
                                
                                
                            </td>
                        </tr>
                    </table>
                </div>

                <div id="end">

                    <br><br><p>RANKING</p><br>
                    <tr>
                        <td>
                            <?php
                                require('conBanco.php');
                                
                                if (isset($_SESSION)) {//Verificar se a sessão não já está aberta.
                                    if($valida = mysqli_query($mysqli, "UPDATE cadastro SET UsrSession = 1 WHERE UsrEmail = '$_SESSION[UsrEmail]' ")){
                                        echo("");
                                    }
                                
                                }
                                
                                
                                    require('conBanco.php');
                                    $queryUser3 =  mysqli_query($mysqli, "SELECT UsrNome, UsrPoints FROM cadastro ORDER BY UsrPoints DESC");
                                    

                                    for($l=1;$l<20;$l++){
                                        if(mysqli_num_rows($queryUser3) !== 0){
                                            
                                            if($queryUser4 = @mysqli_fetch_assoc($queryUser3)){//@ para não mostrar o erro na tela :/
                                                
                                                echo($l);echo(" ");echo $queryUser4['UsrNome'];echo(" ");echo $queryUser4['UsrPoints'];
                                                
                                                echo"<br><br>";
                                                
                                                

                                            }
                                        
                                        }

                                    }


                                    header("Refresh: 300; url = logout.php");

                                
                                

                                
                                
                                
                                
                            ?>
                            
                        </td>
                    </tr>
                </div>

                <div id="topodosite">
                    <h1>Logo</h1>
                </div>

                

                
            </div>
    </body>


</html>