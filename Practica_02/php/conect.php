<?php

$host = "localhost";
$usuario = "root";
$password = "";
$database = "ingresosperdidas";
$conn = mysqli_connect($host, $usuario, $password, $database);

if(!$conn){
    die("La conexion a la base de datos ha fallado: ". mysqli_connect_error());
} else {
    echo 'conectado con exito';
}


?>