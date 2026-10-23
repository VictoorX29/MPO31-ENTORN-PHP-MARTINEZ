<?php
session_start();
if(!isset($_SESSION["usuario"])){
    // Vete a tomar por culo   
    header("Location: registro.php");
    exit;
}
$usuario = $_SESSION["usuario"];
// array_push($_SESSION["alumnos"], "Jonathan")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Hola <?= $usuario ?></h1>
    <a href="logout.php">Cerrar sesión</a>
    <pre>
        <? var_dump($_SESSION["alumnos"]);  ?>
    </pre>
</body>
</html>