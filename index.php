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

/*
    Se debe recorrer los resultados de la funcion
    'mysqli_fetch_assoc() con while para listar
    los registros de la tabla 
*/
while($nota = mysqli_fetch_assoc($query)) {
    // echo "<pre>";
    // var_dump($nota);
    // echo "</pre>";

    echo "<h1>" . $nota["Notas_Titulo"] . "</h1>";
    echo "<h3>" . $nota["Notas_Descripcion"] . "</h3>";

    echo "<hr>";
}


// Insertar en la BD desde PHP
$sql = "INSERT INTO notas VALUES (NULL, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')";

$insert = mysqli_query($conexion, $sql);

// comprobar si el insert se realizo correctamente
if($insert) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: " . mysqli_error($conexion);
}


// echo "<pre>";
// var_dump($notas);
// echo "</pre>";


