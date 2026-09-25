<?php
$rand = rand(0,100);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pp2 - Exercici 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Pp2 - Exercici 3</h1>
        <p class="<?= ($rand%2==0 ? "par" : "impar")?>">Número generado: <?= $rand; ?></p>
    </p>
    </main>
</body>
</html>