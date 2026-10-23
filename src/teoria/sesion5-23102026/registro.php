<?php
session_start();
// if(
// (isset($_POST["nombre"]) ? $_SESSION["nombre"] = $_POST["nombre"] : "") &&
// (isset($_POST["pswd"]) ? $_SESSION["pswd"] = $_POST["pswd"] : "")){
//     header("Location: login.php");
//     exit;
// }
// Solo aceptamos POST
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $_SESSION["nombre"] = $_POST["nombre"];
//     $_SESSION["pswd"] = $_POST["pswd"];
// }else{
//     header("Location: login.php");
//     exit;
// }
$usuario = "Victor";
$contrasena = password_hash("12345",PASSWORD_DEFAULT);
// Login usuario y contraseña --- Prueba
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     if(isset($_POST["nombre"]) && isset($_POST["pswd"])){
//         if($_POST["nombre"] == $usuario && $_POST["pswd"] == $contrasena){
//             $_SESSION["usuario"] = $usuario;
//             $_SESSION["contrasena"] = $contrasena;
//         }else{
//             echo "Usuario o contraseña incorrectos";
//         }
//     }else{
//         header("Location: login.php");
//         exit;
//     }
// }
// Login usuario y contraseña --- Albert
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nombre = $_POST["nombre"] ?? "";
    $pswd = $_POST["pswd"] ?? "";
    if($nombre == $usuario && password_verify($pswd, $contrasena)){
        // echo "Vamos bien";
        // Guardar en sesión
        $_SESSION["usuario"] = $usuario;
        // Redireccionar
        header("Location: login.php");
        exit;
    }else{
        // Si el login es incorrecto
        echo "Usuario o contraseña incorrectos";
    }
}


?>

<form action="registro.php" method="post">
    <div>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
</div>
<div>
    <label for="pswd">Contraseña</label>
    <input type="password" name="pswd" id="pswd">
</div>
<button type="submit">Enviar</button>
</form>