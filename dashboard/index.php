<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área Admin</title>
    <link rel="stylesheet" href="./index2.css">
</head>
<body>
      <header>
        Dashboard Administrativo
    </header>

    <div class="container">
        <nav>
            <h3>Bem-vindo, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h3>
            <a href="index.php">Home</a>
            <a href="./reservas/index.php">Reservas</a>
            <a href="cadastrar.php">Cadastrar Produto</a>
            <a href="#">Listar Produtos</a>
            <a href="logout.php">Sair</a>
        </nav>

        <main>
            <div class="card" style="height:200px; background-color:rgb(60, 203, 16);">
                <h4>Produtos Cadastrados</h4>
                <p>Você possui 11 produtos no sistema.</p>
            </div>
            <div class="card" style="height:200px; background-color:rgb(250, 71, 0);">
                <h4>Vendas Recentes</h4>
                <p>Nenhuma venda nas últimas 24 horas.</p>
            </div>
            <div class="card" style="height:200px">
                <h4>Estatítica de Lucros</h4>
                <p>Fatura: 550.000,00KZ</p>
            </div>
        </main>
    </div>
</body>
</html>
