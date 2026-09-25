<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pp2 - Exercici 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Pp2 - Exercici 1</h1>
        <div class="containerDivs">
            <?php for($i = 50; $i <= 500; $i += 2): ?>
                <div>Div <?= $i ?></div>
            <?php endfor; ?>
        </div>
    </main>
</body>
</html>