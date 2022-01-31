<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <style type="text/css">
        table{
            border: 1px solid lightblue;
            table-layout: fixed;
            width: 200px;
            background-color: #000000;
        }      
        th,td {
            border: 1px solid #480ca8;
            width: 200px;
            height: 25px;
            overflow: hidden;
            color: lightblue;
            
        }
        h3{
            text-align: center; 
            color: #80ffdb;
        }   
        a{
            padding: 0.3em;
        }
        .menu{
            margin-left: 0em;
            margin-top: 1em;
            text-align: center; 
        }
        fieldset{
            border-radius:1em;
            width: 97em;
            margin-top: 1em;
        }
        button{
            box-shadow: 0px 10px 14px -7px #214950;
            background:linear-gradient(to bottom, #000000 5%, #1a3236fd 100%);
            background-color:#4cc9f0;
            border-radius:8px;
            display:inline-block;
            color: #4cc9f0;
            font-family:Arial;
            font-size:16px;
            font-weight:bold;
            padding:7px 28px;
            text-shadow:0px 1px 0px #3d768a;
        }
    </style>
</head>
<body>
        <a href="produto.php"><button>Produtos</button></a>       
        <div id="tst" class=exibicao>
            <fieldset>
                <?php
                    @$server = "localhost";
                    @$user = "root";
                    @$senha = ''; 
                    @$dbname = "loja";
                        
                    $con = mysqli_connect($server, $user, $senha, $dbname);
                
                        
                
                    if (!$con){
                        die("Falha na Conexão". mysqli_connect_error());
                    }
                    
                    $rquery = "SELECT * FROM id_produtos";
                    
                    $result = mysqli_query($con, $rquery);
                    echo '<br><table>
                                <tr> 
                                    <td class="block"><h3>ID</h3></td>
                                    <td class="block"><h3>Descrição</h3></td>
                                    <td class="block"><h3>Estoque</h3></td>
                                </tr>
                              </table>'; 

                    while ($row = mysqli_fetch_array($result)) {
                        echo '<table>
                                <tr> 
                                    <td class="block">'.$row["id_produtos"]. '</td>
                                    <td class="block">'.$row["descricao"]. '</td>
                                    <td class="block">'.$row["estoque"]. '</td>
                                </tr>
                              </table>';      
                    }
                ?>
            </fieldset>    
        </div>
</body>
</html>