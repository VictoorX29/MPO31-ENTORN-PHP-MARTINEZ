<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Prueba</title>
</head>
<body>
    <h1>Formulario de prueba</h1>
    <form action="llegar.php" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad">
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>