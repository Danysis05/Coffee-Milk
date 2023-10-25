<?php
include 'include/conecta.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Milk</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital@1&family=Major+Mono+Display&family=Prompt:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilosProduct.css" />
    <script src="https://kit.fontawesome.com/94f5bc3331.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.html">
                    <img src="imagenes/logo.png" alt="Logo de la empresa" />
                </a>
            </div>
            <ul class="navbar">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
        <div id="espacio">
    </header>
    <div class="cagada">
            <i class="fa-solid fa-cart-shopping"></i>
            <a id="cart">Carrito (0)</a>
        </div>
    <div id="products">
        <div class="carepi">
            <i class="fa-solid fa-face-laugh-wink"></i>
        </div>
        <div class="product">
            <img src="imagenes/ivancito.jpeg" alt="Postre de Café" />
            <h2>POSTRE DE CAFÉ <i class="fa-solid fa-heart"></i></h2>
            <p>Postre de café con galletas trituradas, arequipe y leche condensada.</p>
            <p>Precio: $4,000</p>
            <button class="add-to-cart" data-price="4000">Agregar al carrito</button>
        </div>
        <div class="carepi">
            <i class="fa-solid fa-face-laugh-wink"></i>
        </div>
    </div>

    <script src="producto.js"></script>

    <h1 id="como">SI DESEAS MÁS INFORMACIÓN, CONTÁCTANOS</h1>
    <a id="patroclo" href="contacto.php"><i id="pene" class="fa-solid fa-user"></i></a>

    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="imagenes/logo.png" alt="Logo de la empresa" />
            </div>
            <div class="footer-info">
                <p>Mi Empresa</p>
                <p>Teléfono: 123-456-789</p>
            </div>
            <div class="footer-social">
                <a href="https://es-la.facebook.com"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://wa.me/qr/EOSVABB5IYLSJ1"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/coffee_milk978/"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </footer>
    
</body>
</html>

