<?php
session_start();
if($_SESSION["role"]!="admin"){
    header("Location: home.php");
}else{
    if(isset($_GET["id"])){
        foreach($_SESSION["libros"] as $id=>$libro){
            if($libro["id"]==$_GET["id"]){
                unset($_SESSION["libros"][$id]);
            }
        }
        $_SESSION["libros"] = array_values($_SESSION["libros"]);
    }
    header("Location: home.php");
}
?>