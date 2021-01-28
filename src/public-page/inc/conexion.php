<?php

$usuario = "root";
$contraseña = "";

try {
    $conexion = new PDO('mysql:host=localhost;dbname=dbpeliculas', $usuario, $contraseña);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>