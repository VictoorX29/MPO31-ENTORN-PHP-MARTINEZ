<?php 

if(isset($_POST["nombre"])){
    $nombre = $_POST['nombre'];
};
if(isset($_POST["edad"])){
    $edad = $_POST['edad'];
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola <?= $nombre ?></title>
</head>
<body>
    <a href="index.php">Volver</a>
    <p>Nombre: <?= $nombre ?></p>
    <p>Edad: <?= $edad ?></p>
</body>
</html>