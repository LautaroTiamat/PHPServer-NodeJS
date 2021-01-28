<?php
include './../conexion.php';

$user = $_POST["user"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$createdAt = date("y-m-d");

$consulta1 = 'SELECT * FROM "usuarios" WHERE username = :user';
$verificar = $conexion->prepare($consulta1);

$verificar->execute(array(":user" => $user));
$datos = $verificar->fetch(PDO::FETCH_OBJ);

if($verificar->rowCount() !== 1){
    $consulta2 = 'INSERT INTO `usuarios`(`username`, `password`, `createdAt`)
                  VALUES (:user,:password,:createdAt)';
    $registrar = $conexion->prepare($consulta2);
    $registrar->execute(array(":user" => $user, ":password" => $password, ":createdAt" => $createdAt));

    if ($registrar->rowCount() == 1){
        echo 'Datos agregados correctamente.';
    } else {
        echo 'Algo salió mal.';
    }
} else {
    echo 'El usuario ya existe';
}

?>