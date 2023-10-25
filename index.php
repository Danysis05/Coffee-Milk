<?php
include 'include/conecta.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffe MIlk</title>
  
  <script src="script.js"></script> 
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital@1&family=Major+Mono+Display&family=Prompt:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="estiloIndex.css" />
  <script src="https://kit.fontawesome.com/94f5bc3331.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="imagenes/logo.png">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="main.js"></script>
</head>
<body>
    

    <header>
    <nav>
      <div class="logo">
          <img src="imagenes/lgo.png" alt="Logo de la empresa" />
        
      </div>
      <ul class="navbar">
        <li><a href="producto.php">Productos</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </nav>
      <h1>Deleita Tu Paladar</h1>
      
    </header>

    <section id="perra"><i class="fa-regular fa-face-grin-beam"></i><h1>EL MEJOR POSTRE DE CAFE</h1><i class="fa-regular fa-face-grin-beam"></i></section>

    <section id="quienes-somos">
      <h2>¿Quiénes somos?</h2>
      <img class="empresa" src="imagenes/empresa.jfif" alt="imagen institucional">
      <img class="empresa"src="imagenes/Postre.jpg" alt="">
      <p>
        Somos un pequeño emprendimiento que quiere salir adelante a base de un producto rico y accesible
      </p>
      <video id="johan" controls>
      <source  src="imagenes/videoa.mp4" type="video/mp4" >
      </video>
      <p>
         Comprometida a brindar un producto de excelente calidad y con el mayor gusto de enriqueser el paladar sasaimero
        <a href="producto.php" class="boton-1">Ver producto</a>
      </p>

    </section>

    <footer>
      <div class="footer-container">
        <div class="footer-logo">
          <img src="imagenes/logo.png" alt="Logo de la empresa" />
        </div>
        <div class="footer-info">
          <p>Coffee Milk</p>
          <p>Teléfono: 3102446230 </p>
        </div>
        <div class="footer-social">
          <h3>Contactanos</h3>
          <a href="https://es-la.facebook.com"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://wa.me/qr/EOSVABB5IYLSJ1"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="https://www.instagram.com/coffee_milk978/"><i class="fa-brands fa-instagram"></i></i></a>
        </div>
      </div>
    </footer>
</body>
</html>
