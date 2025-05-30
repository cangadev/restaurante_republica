<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user'] != 'admin') {
    header("Location: ../login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cadastar.css">
</head>
<body>
     <header>
        Dashboard Administrativo
    </header>

    <div class="container">
        <nav>
            <h3>Menu</h3>
            <a href="index.php">Home</a>
            <a href="./reservas/index.php">Reservas</a>
            <a href="cadastrar.php">Cadastrar Produto</a>
            <a href="#">Listar Produtos</a>
            <a href="logout.php">Sair</a>
        </nav>

        <main>
            <div class="card">
                <h4>Cadastrar Produtos</h4>
                <form action="cadastrar.php" method="post" enctype="multipart/form-data">
                <input type="text" name="nome" placeholder="Nome do item" required>
                <input type="text" name="preco" required placeholder="preço">
     <textarea name="descricao" placeholder="Descriçao"></textarea>
     <input type="file" name="image" required>
    <button type="submit">Cadastrar</button>
</form>
            </div>
            <div class="card">
                <h3>Itens cadastrados</h3>
                <?php

$conn = new mysqli("localhost", "root", "", "republica");
$result = $conn->query("SELECT * FROM producto");

while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<img src='../uploads/{$row['image']}' width='100'>";
    echo "<span><h4>Nome:</h4> {$row['nome']}</span>";
    echo "<span><h4>Preço:</h4> {$row['preco']}KZ</span>";
    echo "<span><h4>Descriçao:</h4> {$row['descricao']}</span>";
    echo "<a href='editar.php?id={$row['id']}' class='bntedi'>Editar</a> ";
    echo "<a href='eliminar.php?id={$row['id']}' class='bntelim'>Excluir</a>";
    echo "</div><hr>";
}
?>
              
            </div>
        </main>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = new mysqli("localhost", "root", "", "republica");
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    // Upload da imagem
    $image = $_FILES['image']['name'];
    $path = "../uploads/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $path);

    $stmt = $conn->prepare("INSERT INTO producto (nome, preco, descricao, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdss", $nome, $preco, $descricao, $image);
    $stmt->execute();
    echo "Produto cadastrado!";
    
header("Location: ./cadastrar.php");
}
?>
