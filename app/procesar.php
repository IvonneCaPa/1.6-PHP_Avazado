<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $age = $_POST['age'];

    $_SESSION['usuario'] = $name;
    $_SESSION['mail'] = $mail;

    echo "<h2>Datos Recibidos</h2>";
    echo "Nombre: " . $name . "<br>";
    echo "Edad es: " . $age . "<br>";
    echo "Email: " . $mail . "<br>";
    echo "<hr>";
    echo "<h2>Datos de Sesión</h2>";
    echo "Su usuario es: " . $_SESSION['usuario'] . "<br>";
    echo "Su email de contacto es: " . $_SESSION['mail'] . "<br>";


}








?>