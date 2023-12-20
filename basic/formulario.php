<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    echo "<h2>Datos recibidos:</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido: $apellido</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Mensaje: $mensaje</p>";
} else {
    // Redirect
    header("Location: index.html");
    exit();
}
?>

    // No usar en entorno productivo, más de un CVE reportado
    // Uso Educativo
