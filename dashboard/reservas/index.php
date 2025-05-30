


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reservas.css">
</head>
<body>
  <header>
        Dashboard Administrativo
    </header>

    <div class="container">
        <nav>
            <h3>Menu</h3>
            <a href="../index.php">Home</a>
            <a href="#">Reservas</a>
            <a href="../cadastrar.php">Cadastrar Produto</a>
            <a href="#">Listar Produtos</a>
            <a href="../logout.php">Sair</a>
        </nav>

        <main>
            <div class="card">
                
                <h3>Reservas de clientes</h3>
                <?php

$conn = new mysqli("localhost", "root", "", "republica");
$result = $conn->query("SELECT * FROM reserva");

while ($row = $result->fetch_assoc()) {
    echo "<div>";
                        echo"
                    <table>
                    <tr>
                        <th>Cliente</th>
                        <th>Prato</th>
                        <th>Preco</th>
                        <th>Quantidade</th>
                        <th>Lugares na mesa</th>
                        <th>Data</th>
                        <th>Hora</th>
                    </tr>
                    <tr>
                        <td>{$row['cliente']}</td>
                        <td>{$row['nomeitem']}</td>
                        <td>{$row['preco']}</td>
                        <td>{$row['quantidade']}</td>
                        <td>{$row['mesa']}</td>
                        <td>{$row['dat']}</td>
                        <td>{$row['hora']}</td>
                        <td></td>
                    </tr>
                    </table>
                    "; 
    echo "<a href='eliminar.php?id={$row['id']}' class='bntedi'>Cancelar</a> ";
    echo "<a href='eliminar.php?id={$row['id']}' class='bntelim'>Atendido</a>";
    echo "</div><hr>";

    

                
}
?>
              
            </div>
        </main>
    </div>
</body>
</html>
