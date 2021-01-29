<?php
include 'inc/config.php';
$title_home = 'Iniciar sesión';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'inc/layout.php' ?>
</head>
<body>
    Iniciar sesión
    <br>
    <form action="inc/validaciones/validacion-login.php" method="POST">
        <label for="user">Nombre de usuario</label>
        <input type="text" name="user" placeholder="Nombre de usuario"/>
        <br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña"/>
        <br>
        <button type="submit">Ingresar</button>
    </form>
    <br>
    <a href="registro.php">Registrar usuario</a>
    <br>
    <a href="index.php">Volver al inicio</a>
</body>
</html>