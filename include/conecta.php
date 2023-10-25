<?php
$servidor = "127.0.0.1";
$usuario = "root";
$password = "";
$bd = "alcala";
$conecta = mysqli_connect($servidor, $usuario, $password, $bd);

if (!$conecta) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
?>



