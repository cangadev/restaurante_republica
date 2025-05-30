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
            <a href="../index.php/#sub-destaques">DESTAQUES</a>
            <a href="#cardapio">CARDAPIO</a>
            <a href="#">RESERVAS</a>
            <a href="./login/index.html">LOGIN</a>
        </nav>
    </header>
    <!--Banner-->
    <div class="imgFundo"> 
        <h2>Escolha o seu prato e faça o pedido</h2>
    </div>
    <!--CARDAPIO-->
    <div class="produtos" id="cardapio">
        <h2>ENTRADAS</h2>
        <div>
            <section>
                <img src="../imagens/entrada1.jpg" alt="">
                <h4>Pastéis de Peixe | 1.500KZ</h4>
                <p>Crocante recheada com peixe desfiado temperado</p>
                
            </section>
           <section>
                <img src="../imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="../imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="../imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="../imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
        </div>
    </div>
    <!--Bebidas-->

    <div class="produtos">
        <h2>BEBIDAS</h2>
        <div>
            <section>
                <img src="../imagens/agua.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
           <section>
                <img src="../imagens/vinh.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="../imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="../imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="../imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
            </section>
        </div>
    </div>

    <!--Bebidas-->
    <div class="produtos">
        <h2>PRATOS</h2>
        <div>
     
              <?php

$conn = new mysqli("localhost", "root", "", "republica");
$result = $conn->query("SELECT * FROM producto");

while ($row = $result->fetch_assoc()) {
    echo "<section>";
    echo "<img src='../uploads/{$row['image']}'>";
    echo "<h4> {$row['nome']} | {$row['preco']}KZ</h4>";
    echo "<p>{$row['descricao']}</p>";
    echo "</section>";
}
?>
        </div>
    </div>

    <!--FOOTER-->
    <article class="aaaa">
    <div class="footer" id="cardapio">
        <div>
            <section>
                <h4>A REPUBLICA</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero sequi, pariatur minus eveniet culpa nulla eaque eligendi, nisi laborum deleniti sapiente aut mollitia debitis inventore nemo architecto aliquam illum accusantium.</p>
            </section>
           <section>
                <h4>SOBRE NÓS</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero sequi, pariatur minus eveniet culpa nulla eaque eligendi, nisi laborum deleniti sapiente aut mollitia debitis inventore nemo architecto aliquam illum accusantium.</p>
            </section>
            <section>
                <h4>FALE CONNOSCO</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero sequi, pariatur minus eveniet culpa nulla eaque eligendi, nisi laborum deleniti sapiente aut mollitia debitis inventore nemo architecto aliquam illum accusantium.</p>
            </section>
            <section>
                <h4>REDES SOCIAIS</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero sequi, pariatur minus eveniet culpa nulla eaque eligendi, nisi laborum deleniti sapiente aut mollitia debitis inventore nemo architecto aliquam illum accusantium.</p>
            </section>
        </div>
    </div>
    </article>
</body>
</html>