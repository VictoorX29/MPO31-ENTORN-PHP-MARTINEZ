<?php
session_start();
// Verifica si el usuario ha iniciado sesión; si no, redirige a login.php.
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
    }
// Verifica el rol del usuario

// Obtener la lista de libros desde la sesión
if(!isset($_SESSION["libros"])){
    $_SESSION["libros"] = [
        [
            "id" => 1,
            "titulo" => "Harry Potter y la Orden del Fénix",
            "autor" => "J.K. Rowling",
            "imagen" => "https://covers.openlibrary.org/b/isbn/9788478887422-L.jpg",
            "descripcion" => "En su quinto año en Hogwarts, Harry se enfrenta a un Ministerio de Magia que niega el regreso de Voldemort. Mientras Dolores Umbridge impone su control sobre el colegio, Harry forma el Ejército de Dumbledore para aprender a defenderse."
        ],
        [
            "id" => 2,
            "titulo" => "Harry Potter y la piedra filosofal",
            "autor" => "J.K. Rowling",
            "imagen" => "https://covers.openlibrary.org/b/isbn/9788478884452-L.jpg",
            "descripcion" => "Harry descubre en su undécimo cumpleaños que es un mago y es admitido en el Colegio Hogwarts de Magia y Hechicería. Allí hará sus primeros amigos y descubrirá el secreto que guarda la piedra filosofal."
        ],
        [
            "id" => 3,
            "titulo" => "Harry Potter y el prisionero de Azkaban",
            "autor" => "J.K. Rowling",
            "imagen" => "https://covers.openlibrary.org/b/isbn/9788478885190-L.jpg",
            "descripcion" => "Sirius Black, peligroso preso de Azkaban, se ha fugado y todos creen que va tras Harry. En su tercer curso, Harry descubre la verdad sobre su pasado y sobre quién traicionó a sus padres."
        ],
        [
            "id" => 4,
            "titulo" => "El Imperio Final (Nacidos de la Bruma 1)",
            "autor" => "Brandon Sanderson",
            "imagen" => "https://covers.openlibrary.org/b/isbn/9788466657662-L.jpg",
            "descripcion" => "En un mundo cubierto de ceniza donde el Señor Legislador gobierna desde hace mil años, una joven ladrona con poderes alománticos se une a una banda que planea derrocar al tirano inmortal."
        ],
        [
            "id" => 5,
            "titulo" => "El Camino de los Reyes (El Archivo de las Tormentas 1)",
            "autor" => "Brandon Sanderson",
            "imagen" => "https://covers.openlibrary.org/b/isbn/9788466657686-L.jpg",
            "descripcion" => "En el mundo de Roshar, azotado por tormentas devastadoras, un esclavo, un príncipe guerrero y una joven erudita se ven atrapados en una guerra que podría cambiar el destino del mundo."
        ],
        [
            "id" => 6,
            "titulo" => "Elantris",
            "autor" => "Brandon Sanderson",
            "imagen" => "https://covers.openlibrary.org/b/isbn/9788498720129-L.jpg",
            "descripcion" => "Elantris, la ciudad de los dioses, cayó en la ruina y ahora es una prisión para los malditos. El príncipe Raoden es arrojado a ella y deberá encontrar la forma de devolverle su antiguo esplendor."
        ],
    ];
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Virtual - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <!-- Encabezado del usuario -->
    <header class="bg-light py-3 mb-4 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src="<?= $_SESSION["photo"] ?>" alt="Foto de perfil" class="w-25 rounded-circle me-3">
                <div>
                    <h4 class="m-0">👋 Bienvenido, <?= $_SESSION["username"] ?></h4>
                    <? if($_SESSION["role"] === 'admin'):?>
                        <p class="text-muted m-0">
                            <i class="fas fa-user-shield text-success"></i> 
                        Admin ✏️</p>
                    <? else:?>
                        <p class="text-muted m-0">Lector 📚</p>
                    <? endif;?>
                </div>
            </div>
            <a href="logout.php" class="btn btn-warning btn-sm">
               Cerrar sesión ❌
            </a>
        </div>
    </header>

    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Biblioteca Virtual</h1>
            <p class="lead">Disfruta explorando nuestra colección de libros</p>
        </div>

        <!-- Botón de agregar libro (solo visible para el admin) -->
        <? if($_SESSION["role"]==="admin"):  ?>
            <div class="text-center mb-4">
                <a href="add_edit_book.php" class="btn btn-outline-success btn-lg">
                    <i class="fas fa-plus-circle me-2"></i>
                Agregar Nuevo Libro
                </a>
            </div>
        <? endif; ?>
        <!-- Mostrar lista de libros en un grid de tarjetas con tamaño uniforme -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($_SESSION["libros"] as $libro): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="<?= $libro["imagen"] ?>" class="card-img-top" alt="" style="height: 400px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $libro["titulo"] ?></h5>
                            <p class="card-text"><strong>Autor:</strong> <?= $libro["autor"] ?></p>
                            <p class="card-text"><?= $libro["descripcion"] ?></p>
                        </div>
                        
                        <!-- Botones de editar y eliminar (solo visible para el admin) -->
                        <? if($_SESSION["role"]==="admin"): ?>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="add_edit_book.php?id=<?= $libro["id"] ?>" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <a href="delete_book.php?id=<?= $libro["id"] ?>" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </a>
                            </div>
                        <? endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>