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
            <a href="">INICIO</a>
            <a href="#sub-destaques">DESTAQUES</a>
            <a href="#cardapio">CARDAPIO</a>
            <a href="./pedidos/index.php">PEDIDOS</a>
            <a href="./login/index.html">LOGIN</a>
        </nav>
    </header>
    <!--Banner-->
    <div class="banner">
        <section>
            <h2>Bem vindo ao restaurante Republica</h2>
            <p>Aqui voce pode reservar...</p>
        </section>
    </div>
    <div class="imgFundo">

    </div>

    <!--DESTAQUES-->
    <div class="destaques">
        <div id="sub-destaques">
            <h2>DESTAQUES</h2>
            <div>
                <section>
                    <img src="./imagens/img2.jpg" alt="">
                </section>
                <section>
                    <img src="./imagens/img2.jpg" alt="">
                </section>
                <section>
                    <img src="./imagens/img2.jpg" alt="">
                </section>
                <section>
                    <img src="./imagens/img2.jpg" alt="">
                </section>
            </div>
        </div>
    </div>
    <!--CARDAPIO-->
    <div class="produtos" id="cardapio">
        <h2>ENTRADAS</h2>
        <div>
            <section>
                <img src="./imagens/entrada1.jpg" alt="">
                <h4>Pastéis de Peixe | 1.500KZ</h4>
                <p>Crocante recheada com peixe desfiado temperado</p>
                
            </section>
           <section>
                <img src="./imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="./imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="./imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="./imagens/img3.jpg" alt="">
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
                <img src="./imagens/agua.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
           <section>
                <img src="./imagens/vinh.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="./imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="./imagens/img3.jpg" alt="">
                <h4>Picanha | 1.500KZ</h4>
                <p>Corte bovino, especialmente popular no Brasil</p>
                
            </section>
            <section>
                <img src="./imagens/img3.jpg" alt="">
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
    echo "<img src='./uploads/{$row['image']}'>";
    echo "<h4> {$row['nome']} | {$row['preco']}KZ</h4>";
    echo "<p>{$row['descricao']}</p>";
    echo "<a href='./reservas/index.php?id={$row['id']}' class='bntelim'><button>Reservar</button></a>";
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