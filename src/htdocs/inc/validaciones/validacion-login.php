<?php
session_start();
include './../conexion.php';

$user = $_POST["user"];
$password = $_POST["password"];

$consulta1 = 'SELECT * FROM usuarios WHERE username = :user AND password = :password';
$verificar = $conexion->prepare($consulta1);
$verificar->execute(array(":user" => $user, ":password" => $password));
$datos = $verificar->fetch(PDO::FETCH_OBJ);

if($verificar->rowCount() == 1){
    $_SESSION["nombreUsuario"] = $datos->username;
    echo "Sesion iniciada";
    header ('Location: ./../../index.php');
} else {
    echo "El usuario no existe";
}

?>