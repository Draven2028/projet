<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../arquivobase/interface.css" type="text/css" media="screen">
    <title>estoque de produtos</title>
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
        <div class="form">   
        <fieldset>
            <h1>Cadastro de produtos</h1>
            <label>
                <p>Descrição
                <input id="descricao" name="descricao" type="text" placeholder="Digite a descrição">
                </p>
            </label>
            <label>
                <p>Estoque de produtos
                <input id="estoque" name="estoque" type="number" placeholder="Digite a Quantidade em estoque">
                </p>
            </label>
            <label>
                <div class="button">
                    <input id="botao" type="submit" value="cadastrar">  
                </div> 
            </label>
        </fieldset>
        </div>
    </form>
</body>
</html>