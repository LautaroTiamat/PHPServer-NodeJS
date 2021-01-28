<?php
session_start();
include './inc/config.php';
$title_home = 'Inicio';

$asd = 'SELECT * rela_peliculas_generos r
        JOIN peliculas p ON p.ID = r.rela_pelicula
        JOIN generos g ON g.ID = r.rela_genero';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require './inc/layout.php'; ?>
</head>
<body>
    Inicio
    <br>
    <?php
        if(isset($_SESSION["nombreUsuario"])){
            echo $_SESSION["nombreUsuario"];
        } else {
    ?>
        <br>
        <a href="./login.php">Iniciar sesión</a>
        <br>
        <a href="./registro.php">Registrar usuario</a>
    <?php } ?>
    <br>
    <?php echo 'Versión actual de PHP: ' . phpversion(); ?>
</body>
</html>