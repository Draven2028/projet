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
            <h1>Cadastro de Funcionarios</h1>
            <label>
                <p>Nome
                <input id="namef" name="namef" type="text" placeholder="Digite o nome do funcionário">
                </p>
            </label>
            <label>
                <p>Endereço
                <input id="enderecof" name="enderecof" type="text" placeholder="Digite o Endereço">
                </p>
            </label>
            <label>
                <p>Bairro
                <input id="bairrof" name="bairrof" type="text" placeholder="Digite o Bairro">
                </p>
            </label>
                <p>Cidade
                <select name="cidadef" id="cidadef">
                    <option value="araçatuba">Araçatuba</option>
                    <option value="birigui">Birigui</option>
                    <option value="penapolis">Penápolis</option>
                    <option value="guararapes">Guararapes</option>
                    <option value="saopaulo">São Paulo</option>
                    <option value="" selected>Selecione a cidade</option>
                </select>
                </p>
            <label>
            <p>Telefone
            <input id="telefonef" name="telefonef" type="tel" placeholder="(xx) xxxxx-xxxx">
            </p>
            </label>
            <label>
                <p>CPF
                <input id="cpff" name="cpff" type="number" placeholder="xxx xxx xxx xx">
                </p>
            </label>
            <label>
                <p>RG
                <input id="rgf" name="rgf" type="number" placeholder="xxx xxx xx x">
                </p>
            </label>
            <label>
                <p>E-mail
                <input id="emailf" name="emailf" type="email" placeholder="exemple@gmail.com">
                </p>
            </label>
            <label>
                <p>Data de nascimento
                <input id="datef" name="datef" type="date" placeholder="dd/mm/aaaa">
                </p>
            </label>
            <br>
            <label class=botao>
                <div>
                    <input name="button" id="botao" type="submit" value="cadastrar">  
                </div> 
            </label>
        </fieldset>       
    </form>

</body>
</html>