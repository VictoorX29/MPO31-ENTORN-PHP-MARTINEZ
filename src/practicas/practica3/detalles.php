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
        <?php 
        if(isset($_GET["id"])): ?>
            <h1><?= $pelicula["nombre"] ?></h1>
            <hr>
            <div class="infoPeli">
                <div class="divImgTrailer">
                    <div>
                        <img src="<?= $pelicula["imagen"] ?>" alt="Póster <?= $pelicula["nombre"] ?>">
                    </div>
                    <a href="trailer.php?id=<?= $_GET["id"] ?>" class="btnVerTrailer">TRÁILER</a>
                </div>
                <div class="detallePeli">
                    <p><?= $pelicula["sinopsi"] ?></p>
                    <div>
                        <p><strong>Duración: </strong><?= $pelicula["duracion"] ?></p>
                        <p><strong>Director: </strong><?= $pelicula["director"] ?></p>
                        <p class="pActores"><strong>Actores: </strong>
                        <?php foreach($pelicula["reparto"] as $id=>$actor){
                            echo '<span>';
                            echo $actor;
                            echo '</span>';
                            if($id != count($pelicula["reparto"])-1) echo ", ";
                        }?>
                        
                        </p>
                        <p><strong>Calificación: </strong></p>
                        <p><strong>Género: </strong><?= $pelicula["genero"] ?></p>
                    </div>
                    <div class="divHoraAtmos">
                        <p>ATMOS</p>
                        <div class="cardInfoDivHora">
                            <?php foreach($pelicula["horarios"] as $horario): ?>
                                <div class="horario"><a href=''><?= $horario ?></a></div>
                            <?php endforeach; ?>
                        </div>
                        <img src="https://imgs.search.brave.com/XlSFlUdTk-cP81TPcPm1pWbpSI4MYtPHbezOZynnHlU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93cC5s/b2dvcy1kb3dubG9h/ZC5jb20vd3AtY29u/dGVudC91cGxvYWRz/LzIwMjIvMDEvRG9s/YnlfQXRtb3NfTG9n/b19ob3Jpem9udGFs/bHktNzAweDk5LnBu/Zw" alt="Logo Dolby Atmos">
                    </div>
                    <div class="carruselFotosPeli"></div>
                </div>
            </div>
        <?php else: ?>
            <h1>Selecciona una película en la Cartelera</h1>
        <?php endif; ?>
    </main>
</body>
</html>