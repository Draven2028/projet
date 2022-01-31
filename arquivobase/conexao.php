<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="interface.css" type="text/css" media="screen">
    <meta http-equiv="refresh" content="0; URL='index.php"/>
</head>
<body>
    <a href="index.php"><h1>Home</h1></a><br>
</body>
</html>
<?php
    @$server = "localhost";
    @$user = "root";
    @$senha = ''; 
    @$dbname = "loja";
        
    $con = mysqli_connect($server, $user, $senha, $dbname);

        

    if (!$con){
        die("Falha na Conexão". mysqli_connect_error());
    }
    else
        echo "A Conexão foi Concluida com Êxito <br><br> ";
    
    // variaveis dos clientes - recebendo do form

    @$nome = $_POST['nome'];    
    @$endereco = $_POST['endereco'];
    @$bairro = $_POST['bairro'];
    @$cidade = $_POST['cidade'];
    @$telefone = $_POST['telefone'];
    @$cpf = $_POST['cpf'];
    @$rg =$_POST['rg'];
    @$email = $_POST['email'];
    @$dat = $_POST['dat'];

    // variaveis dos funcionarios - recebendo do form

    @$namef = $_POST['namef'];    
    @$enderecof = $_POST['enderecof'];
    @$bairrof = $_POST['bairrof'];
    @$cidadef = $_POST['cidadef'];
    @$telefonef = $_POST['telefonef'];
    @$cpff = $_POST['cpff'];
    @$rgf =$_POST['rgf'];
    @$emailf = $_POST['emailf'];
    @$datef = $_POST['datef'];

    // variaveis dos produtos - recebendo do form 

    @$descricao = $_POST['descricao'];
    @$estoque = $_POST['estoque'];

    //variaveis das cidades - recebendo do form

    @$cidadec = $_POST['cidadec'];
    @$estado = $_POST['estado'];

    //se o formulario cliente tiver dados envia para o banco.. 

    if (!empty($nome)){
        $query = "INSERT INTO id_clientes(nome, endereco, bairro, cidade, telefone, cpf, rg, email, dat) 
        VALUES('$nome', '$endereco', '$bairro', '$cidade', '$telefone', '$cpf', '$rg', '$email', '$dat')"; 

        $result = mysqli_query($con, $query);
        echo "Clientes Adicionado <br>";
    }
    else {
        echo <<<html
        <br>
        <html>
            <a href="../cliente/cliente.php">Adicionar cliente</a>
        </html>
        <br>
        html;   
    }
     
    
    //se o formulário funcionario tiver dados envia para o banco..
    
    if (!empty($namef)){
        $query = "INSERT INTO id_funcionarios(nome, endereco, bairro, cidade, telefone, cpf, rg, email, dat) 
        VALUES('$namef', '$enderecof', '$bairrof', '$cidadef', '$telefonef', '$cpff', '$rgf', '$emailf', '$datef')"; 

        $result = mysqli_query($con, $query);
        echo "<br> Funcionário Adicionado <br>";
    }
    else {
        echo <<<html
        <br>
        <html>
            <a href="../funcionario/funcionario.php"> Adicionar funcionarios</a>
        </html>
        <br>  
        html;   
    }
    
    //se o formulário produto tiver dados envia para o banco..

    if (!empty($descricao)){
        $query = "INSERT INTO id_produtos(descricao, estoque) 
        VALUES('$descricao', '$estoque')"; 

        $result = mysqli_query($con, $query);
        echo "Produto Adicionado";
    }
    else {
        echo <<<html
        <br>
        <html>
            <a href="../produto/produto.php">Adicionar Produto</a>
        </html>
        <br>
        html;   
    }

    //se o formulário cidades tiver dados envia para o banco..
    
    if (!empty($cidadec)){
        $query = "INSERT INTO id_cidades(cidades, estado) 
        VALUES('$cidadec', '$estado')"; 

        $result = mysqli_query($con, $query);
        echo "Cidade Adicionado";
        
    }
    else {
        echo <<<html
        <br>
        <html>
            <a href="../cidade/cidade.php">Adicionar Cidade</a>
        </html>
        html;   
    }

    mysqli_close($con);


?>
