<?php
session_start();

echo 'Hola Sesión 5';

$_SESSION['edad'] = 19;

echo $_SESSION['edad'];

$_SESSION["alumnos"] = ["Juan", "Miguel", "David", "Pedro"];
?>