
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        div{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        div section{
            width: 30%;
            height: 200px;
            background-color: greenyellow;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        div section a{
            margin-top: 20px;
            text-decoration: none;
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <section>
            <h3>Operaçao realizada com sucesso!</h3>
            <a href="../index.php">Voltar</a>
            <?php
$produto = $_GET['nome'];
$preco = $_GET['preco'];
$cliente = $_GET['cliente'];
$quantidade = $_GET['quantidade'];
$mesa = $_GET['mesa'];
$descricao = $_GET['descricao'];
$dat = $_GET['dat'];
$hora = $_GET['hora'];

echo "<a href='../gerarpdf/index.php?nome=" . urlencode($produto) .
     "&preco=" . $preco .
     "&cliente=" . urlencode($cliente) .
     "&quantidade=" . $quantidade .
     "&mesa=" . $mesa .
     "&descricao=" . urlencode($descricao) .
     "&dat=" . $dat .
     "&hora=" . $hora .
     "'>Emitir Fatura</a>";

?>

                        </section>
    </div>
</body>
</html>