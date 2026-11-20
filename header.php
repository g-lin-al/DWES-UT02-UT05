<?php
if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])) {
    foreach ($usuarios as $usuario => $contrasenia) {
        if (($_COOKIE["user"] == $usuario) && ($_COOKIE["pass"] == $contrasenia)) {
            // Código de conexión exitosa
        } else {
            // Código de error de conexión
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    <header>
        <?php 
        echo "$titulo";
        include 'login.php';
        ?>
    </header>
<!-- Incluir el título solamente aquí -->