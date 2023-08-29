<?php
$host="localhost";
$bd="sitio";
$usuario="root";
$contrasenia="Pqr7**/_8";

try {
    $conexion= new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>