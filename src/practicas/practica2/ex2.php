<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pp2 - Exercici 2</title>
    <link rel="stylesheet" href="style.css">
    <style>
        <?php for($i=1;$i<=11;$i++): ?>
            .div<?=$i?>{
                border: 4px solid rgb(<?=rand(0,255)?>, <?=rand(0,255)?>, <?=rand(0,255)?>);
            }
        <?php endfor;?>
    </style>
</head>
<body>
    <main>
        <h1>Pp2 - Exercici 2</h1>
        <div class="containerDivsMult">
            <?php for($i=1;$i<=11;$i++): ?>
                <div class="div<?=$i?>">
                    <h2>Tabla del <?=$i?></h2>
                    <?php for($j=1;$j<=10;$j++): ?>
                        <p><?=$i ?> x <?=$j ?> = <?=($i*$j)?></p>
                    <?php endfor; ?>
                </div>
            <?php endfor;?>
        </div>
    </main>
</body>
</html>