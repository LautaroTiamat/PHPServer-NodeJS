<?php
include './inc/config.php';
$title_home = 'Registrar usuario';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require './inc/layout.php' ?>
</head>
<body>
    Registrar usuario
    <br>
    <form action="inc/validaciones/validacion-registro.php" method="POST">
        <label for="user">Nombre de usuario</label>
        <input type="text" name="user" placeholder="Nombre de usuario"/>
        <br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña"/>
        <br>
        <label for="repassword">Repetir contraseña</label>
        <input type="repassword" name="repassword" placeholder="Repetir contraseña"/>
        <br>
        <button type="submit">Registrar</button>
    </form>
    <br>
    <a href="./index.php">Volver al inicio</a>
</body>
</html>