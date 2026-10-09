<?php

$proyectos=[
    [
        "nom"=>"Landing 1",
        "tecnologia"=>"HTML",
        "horas" => 20,
        "estado" => "Acabado"
    ],
    [
        "nom"=>"Landing 2",
        "tecnologia"=>"CSS",
        "horas" => 10,
        "estado" => "En proceso"
    ],
    [
        "nom"=>"Landing 3",
        "tecnologia"=>"HTML/JS",
        "horas" => 25,
        "estado" => "Pendiente"
    ],
];

echo '<pre>';
var_dump($proyectos);
echo '</pre>';

print_r($proyectos[0]);

foreach($proyectos as $id=>$proyecto):?>
    <div>
        <h1><?= $proyecto['nom'] ?></h1>
        <p>Horas: <?= $proyecto['horas'] ?></p>
        <a href="./index.php?id=<?= $id ?>">Ver detalles del proyecto</a>
    </div>
<?php endforeach; ?>
