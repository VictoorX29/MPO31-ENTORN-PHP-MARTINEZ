<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Mercadona</title>
    <!-- link css bootrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="container text-center my-5">
            <h1>Bienvenido a Mercadona</h1>
            <p>Por favor, completa el siguiente formulario para continuar tu compra.
            </p>
        </div>
        <div class="container">
            <form action="index.php" method="post" class="text-center">
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div>
                    <label for="telefono">Teléfono</label>
                    <input type="number" name="telefono" id="telefono">
                </div>
                <div>
                    <label for="urlFoto">URL Foto de Perfil</label>
                    <input type="url" name="urlFoto" id="urlFoto">
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>