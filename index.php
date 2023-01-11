<?php

// Conectar a la bd

// host, user, password, bd
$conexion = mysqli_connect("localhost", "root", "", "php_mysql");

// Comprobar si la conexion es correcta
if(mysqli_connect_errno()) {
    echo "La conexion a la BD MySQL ha fallado: " . mysqli_connect_error();
} else {
    echo "¡Conexion realizada correctamente!";
}

// Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");

// para recibir los datos del query como array asociativo
// $notas = mysqli_fetch_assoc($query);

while($nota = mysqli_fetch_assoc($query)) {
    // echo "<pre>";
    // var_dump($nota);
    // echo "</pre>";

    echo "<h1>" . $nota["Notas_Titulo"] . "</h1>";
    echo "<h3>" . $nota["Notas_Descripcion"] . "</h3>";

    echo "<hr>";
}

// echo "<pre>";
// var_dump($notas);
// echo "</pre>";


