<?php
$temps = [];
$mitjana = 0;
for($i=0;$i<10;$i++){
    $tempRand = rand(-10,40);
    array_push($temps,$tempRand);
    $mitjana += $tempRand;
}
$mitjana /= 10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pp2 - Exercici 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Pp2 - Exercici 5</h1>
        <div class="containerEx5">
            <h2>Classificació de Temperatures</h2>
            <div class="temperatures">
                <?php for($i=0;$i<10;$i++): 
                    $temp = $temps[$i];
                    ?>
                    <div class="divTemp <?= ($temp < 10 ? "fred" : ($temp > 25 ? "calor" : "suau")) ?>">
                        <h3><?= $temp ?>ºC</h3>
                        <p><?= ($temp < 10 ? "Fred" : ($temp > 25 ? "Calor" : "Temperatura suau")) ?></p>
                    </div>
                <?php endfor; ?>
            </div>
            <p class="mitjanaTemp">Mitjana de les temperatures: <?= $mitjana ?>ºC</p>
        </div>
    </main>
</body>
</html>