<?php
$conn = new mysqli("localhost", "root", "", "republica");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomeitem = $_POST['nomeitem'];
    $preco = $_POST['preco'];
    $cliente = $_POST['cliente'];
    $quantidade = $_POST['quantidade'];
    $mesa = $_POST['mesa'];
    $descricao = $_POST['descricao'];
    $dat = $_POST['dat'];
    $hora = $_POST['hora'];

    $stmt = $conn->prepare("INSERT INTO reserva (nomeitem, preco, cliente, quantidade, mesa, descricao, dat, hora) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sdsiisss", $_POST['nomeitem'], $_POST['preco'], $_POST['cliente'], $_POST['quantidade'], $_POST['mesa'], $_POST['descricao'], $_POST['dat'], $_POST['hora']);
    $stmt->execute();
    echo "Produto atualizado!";

   // header("Location: ../resultadoReserva/index.php?nome=" . urlencode($nomeitem) . "&id=" . $id);

header("Location: ../resultadoReserva/index.php?nome=".urlencode($nomeitem)."&preco=$preco"."&cliente=".urlencode($cliente)."&quantidade=$quantidade"."&mesa=$mesa"."&descricao=$descricao"."&dat=$dat"."&hora=$hora");
    exit;
}

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM producto WHERE id=$id")->fetch_assoc();
//====
$conn = new mysqli("localhost", "root", "", "republica");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    


    
   // $sql = mysqli_query($conn, $stmt);
   $stmt->execute();
 
//header("Location: ./cadastrar.php");
}
?>

<?php
$conn = new mysqli("localhost", "root", "", "republica");
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM producto WHERE id='$id'")->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>A República</h3>
        <nav>
            <a href="../index.php">INICIO</a>
            <a href="../index.php">DESTAQUES</a>
            <a href="../index.php">CARDAPIO</a>
            <a href="">RESERVAS</a>
            <a href="../login/index.html">LOGIN</a>
        </nav>
    </header>
    <!--Banner-->
    <div class="banner1">
        <section>
            <h2>Preencha os campos vazios</h2>
            <form action="index.php" method="post">
                <article>
          <input type="hidden" name="id" value="<?= $res['id'] ?>">
        <input type="text" name="nomeitem" value="<?= $res['nome'] ?>" readonly>
    <input type="text" name="preco" value="<?= $res['preco'] ?>" readonly>
    <input type="text" name="ola" value=" <?=$res['descricao'] ?>" readonly/>
                </article>
                <article>
                    <input type="text" name="cliente" placeholder="Seu nome...">
                    <input type="number" name="quantidade" placeholder="Quantidade">
                    <input type="number" name="mesa" placeholder="Mesa de 02">
                </article>
                <article>
                    <input type="text" name="descricao" placeholder="Descricao (opcional)">
                    <input type="date" name="dat" >
                    <input type="time" name="hora" >
                </article>
                <button type="submit">Agendar</button>
            </form>
            </section>
    </div>
</body>
</html>
