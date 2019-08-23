<!DOCTYPE html>

<html>
    <head>
        <title>Pagina de buscar jogador</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/projetojogo/css/logado.css">
    </head>

    <body>
        <div id="master">
            <div id="top">
                coluna 1
                dados do jogador etc<br><br><br>
                <table>
                    <tr>
                        <td>Usuario online: </td>
                        <td><?php session_start();echo $_SESSION['Nome'];?></td><br>
                        
                    </tr>
                    <tr>
                        <td>EMAIL: </td>
                        <td><?php echo $_SESSION['UsrEmail']?></td>
                    </tr>
                    <tr>
                        <td>PONTOS: </td>
                        <td><?php echo $_SESSION['UsrPoints']?></td>
                    </tr>
                </table>
                
                
            </div>

                <div id="end">
                    coluna 3<br>RANKING<br>
                    <tr>
                        <td>
                            <?php
                                require('conBanco.php');
                                if($valida = mysqli_query($mysqli, "UPDATE cadastro SET UsrSession = 0")){
                                    echo("");
                                }
                                if (isset($_SESSION)) {//Verificar se a sessão não já está aberta.
                                    if($valida = mysqli_query($mysqli, "UPDATE cadastro SET UsrSession = 1 WHERE UsrEmail = '$_SESSION[UsrEmail]' ")){
                                        echo("");
                                    }else{
                                        if($valida = mysqli_query($mysqli, "UPDATE cadastro SET UsrSession = 0 WHERE UsrEmail = '$_SESSION[UsrEmail]' ")){
                                            echo("");
                                        }

                                    }
                                
                                }
                                header("Refresh: 20; url = logado.php");

                                
                                
                                
                                
                            ?>
                            
                        </td>
                    </tr>
                </div>

                <div id="mid">
                    coluna 2<br>jogadores online sao aqueles com UsrSession = 1<br><br>
                    <table>
                        <tr>
                            <td>JOGADORES ONLINE: </td>
                            <td>
                                <?php
                                    $i = 0;
                                    $list = array();
                                    set_time_limit(0);
                                    require('conBanco.php');
                                    $queryUser2 =  mysqli_query($mysqli, "SELECT * FROM cadastro WHERE UsrSession = 1");
                                    while(mysqli_num_rows($queryUser2) !== 0){
                                        
                                        if($queryUser3 = @mysqli_fetch_assoc($queryUser2)){//@ para não mostrar o erro na tela :/
                                            
                                            echo $queryUser3['Nome'];echo"<br>";
                                            
                                            
                                            $list[$i] = $queryUser3['UsrPoints'];
                                            $_SESSION['ordem'] = $list;
                                            echo $list[$i];
                                            

                                        }
                                        $i = $i + 1;
                                    }
                                    
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>

                
            </div>
    </body>


</html>