<?php
$nombre="Víctor";
$apellido1="Martínez";
$apellido2="Nevado";
$centro="FP Llefià";
$clase="DAW2";
$edad=19;
$descripcion="$nombre, $edad años, estudiante de DAW en Badalona, haciendo prácticas en Menarini como desarrollador."
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha <?php echo("$nombre $apellido1 $clase");?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="carta">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5LYBjrvvJQkeCzZdTkHf30iOv7_-sDWwvGo33OVy5mw&s=10" alt="Shawn Frost">
        <h1><?php echo"$nombre"?></h1>
        <h2><?php echo"$apellido1 $apellido2" ?></h2>
        <p><?php echo"$descripcion"?></p>
        <p><?php echo"$edad"?> años</p>
        <div>
            <span><?php echo"$centro"?></span>
            <span> | </span>
            <span><?php echo"$clase"?></span>
        </div>
    </div>
    
</body>
</html>