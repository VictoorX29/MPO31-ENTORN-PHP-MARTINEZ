<?php
include_once("peliculas.php");
/** @var array $peliculas */
$pelicula = $peliculas[$_GET["id"]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pp3: Información | <?= $pelicula["nombre"] ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <a href="index.php">Volver</a>
        <h1>Tráiler <?= $pelicula["nombre"] ?></h1>
        <div>
            <iframe width="100%" height="600px" src="https://www.youtube.com/embed/<?= $pelicula["parametroEmbed"] ?>?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </main>
</body>
</html>