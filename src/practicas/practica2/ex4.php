<?php 
$rand = rand(1,100);
$primo=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pp2 - Exercici 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Pp2 - Exercici 4</h1>
        <div class="containerEx4">
            <h2>Número generado: <?=$rand?></h2>
            <h3>Divisores de: <?=$rand?></h3>
            <div class="containerDivisores">
                <?php for($i=$rand-1;$i>0;$i--):?>
                    <?php if($rand%$i==0): ?>
                        <p class="numbDivis"><?=$i?></p>
                        <?$primo++?>
                    <?php endif; ?>
                <?php endfor;?>
            </div>
            <p><?=$rand ?><?=($primo==1 ? " sí es primo" : " no es primo")?></p>
        </div>
    </main>
</body>
</html>