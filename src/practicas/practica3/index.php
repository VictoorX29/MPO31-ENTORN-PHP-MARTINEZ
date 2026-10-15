<?php
include("peliculas.php");
/** @var array $peliculas */ // Es para que no aparezca el error en la línea donde lo quiera usar
/*echo '<pre>';
var_dump($peliculas);
echo '</pre>';*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pp3: Cartelera OCINE Màgic BDN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header></header>
    <main>
        <section></section>
        <section id="cartelera">
            <div>
                <h1>Cartelera</h1>
                <hr>
            </div>
            <div class="cardsCartelera">
                <?php 
                foreach($peliculas as $id=>$pelicula):?>
                    <div class="card">
                        <img src="<?= $pelicula["imagen"] ?>" alt="<?= $pelicula["nombre"] ?>">
                        <div class=cardInfo>
                            <h3>
                                <a href='detalles.php?id=<?= $id ?>'><?= $pelicula["nombre"] ?></a>
                            </h3>
                            <p>Clasificación : <?= $pelicula["calificacion"] ?></p>
                            <div class="cardInfoDivHora">
                                <?php foreach($pelicula["horarios"] as $horario): ?>
                                    <div class="horario"><a href=''><?= $horario ?></a></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="cardInfoBtns">
                                <a href="trailer.php?id=<?= $id ?>">TRÁILER</a>
                                <a href="detalles.php?id=<?= $id ?>">INFO</a>
                            </div>
                        </div>
                    </div>
                <? endforeach;
                ?>
            </div>
        </section>
    </main>
    <footer></footer>
</body>
</html>