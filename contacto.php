<?php
include 'include/conecta.php';

if(isset($_POST['enviar'])){
    insertar($conecta);
}

function insertar($conecta){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];

    $consulta = "INSERT INTO formulario(nombre, telefono, correo, direccion)
    VALUES ('$nombre', '$telefono', '$correo', '$direccion')";

    if (mysqli_query($conecta, $consulta)) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conecta);
    }

    mysqli_close($conecta);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Coffee Milk</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital@1&family=Major+Mono+Display&family=Prompt:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilosContacto.css" />
    <script src="https://kit.fontawesome.com/94f5bc3331.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagenes/logo.png">
</head>
<body>
    <nav>
        <div class="logo">
            <a href="index.html">
                <img src="imagenes/logo.png" alt="Logo de la empresa" />
            </a>
        </div>
        <ul class="navbar">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="producto.php">Productos</a></li>
        </ul>
    </nav> 
    <section id="contacto">
        <div class="contact-info">
            <h2>Contáctanos</h2>
            <p>Teléfono: 3102446230</p>
            <p>Correo electrónico: coffeemilk035@gmail.com</p>
            <p>Ubicación: Calle Principal #123, Sasaima, Colombia</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31799.27401975818!2d-74.44661346523436!3d4.954748870781108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e409b689501b89f%3A0xc83427019a59295f!2sSasaima%2C%20Cundinamarca!5e0!3m2!1ses-419!2sco!4v1689618640132!5m2!1ses-419!2sco"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            <div id="map"></div>
        </div>

        <div class="contact-form">
            <h2>Formulario de contacto</h2>
            <form method="post" action="contacto.php">
                <input type="text" name="nombre" placeholder="Nombre" required />
                <input type="tel" name="telefono" placeholder="Teléfono" required />
                <input type="email" name="correo" placeholder="Correo electrónico" required />
                <input type="text" name="direccion" placeholder="Dirección" required />
                <button id="mamar" name="enviar" type="submit">Enviar</button>
            </form>
        </div>
    </section>

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
                <a href="https://www.instagram.com/coffee_milk978/"><i class="fa-brands fa-instagram"></i></i></a>
            </div>
        </div>
    </footer>
</body>
</html>