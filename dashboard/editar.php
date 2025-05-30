<?php
$conn = new mysqli("localhost", "root", "", "republica");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $conn->prepare("UPDATE producto SET nome=?, preco=?, descricao=? WHERE id=?");
    $stmt->bind_param("sdsi", $_POST['nome'], $_POST['preco'], $_POST['descricao'], $_POST['id']);
    $stmt->execute();
    echo "Produto atualizado!";
    
header("Location: ./cadastrar.php");
    exit;
}

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM producto WHERE id=$id")->fetch_assoc();
?>

<form method="post">
    <input type="hidden" name="id" value="<?= $res['id'] ?>">
    Nome: <input type="text" name="nome" value="<?= $res['nome'] ?>"><br>
    Preço: <input type="text" name="preco" value="<?= $res['preco'] ?>"><br>
    Descrição: <textarea name="descricao"><?= $res['descricao'] ?></textarea><br>
    <button type="submit">Salvar</button>
</form>
