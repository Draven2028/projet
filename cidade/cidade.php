<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../arquivobase/interface.css" type="text/css" media="screen">
</head>
<body>
    <div class='menu'>
        <fieldset >
            <a href="../arquivobase/index.php"><button>Home</button></a>
            <a href="../cliente/cliente.php"><button>Cliente</button></a>
            <a href="../produto/produto.php"><button>Produtos</button></a>
            <a href="../cidade/cidade.php"><button>Cidades </button></a>
            <a href="../funcionario/funcionario.php"><button>Funcionario</button></a>
            <a href="../cliente/listacliente.php"><button>lista de cliente</button></a>
            <a href="../produto/listaproduto.php"><button>Lista de Produtos</button></a>
            <a href="../cidade/listacidade.php"><button>lista de Cidades</button></a>
            <a href="../funcionario/listafuncionario.php"><button>lista de Funcionarios</button></a>    
        </fieldset>
    </div>

    <form action="../arquivobase/conexao.php" method="POST">
        <fieldset>
            <h1>Cadastro de Cidades</h1>
            <label>
                <p>Cidade
                <input id="cidadec" name="cidadec" type="text" placeholder="Digite a Cidade">
                </p>
            </label>
            <label>
                <p>Estado
                <input id="estado" name="estado" type="text" placeholder="UF">
                </p>
            </label>
            <label>
                <div class="button">
                    <input id="botao" type="submit" value="cadastrar">  
                </div> 
            </label>
        </fieldset>
    </form>
</body>
</html>