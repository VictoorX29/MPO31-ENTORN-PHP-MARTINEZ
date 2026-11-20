<?php
require_once('config.php');

try {
    $pdo = db();
} catch (PDOException $e) {
    die('¡Error de conexión a la BDD! '.$e->getMessage());
}
$sql = 'SELECT * FROM videojocs';
$stmt = $pdo->query($sql);
echo '<pre>';
var_dump($stmt);
echo '</pre>';

// Método fetchAll() para convertir este objeto en un array iterable
$videojuegos = $stmt->fetchAll();
echo '<pre>';
var_dump($videojuegos);
echo '</pre>';

foreach($videojuegos as $vd): ?>
<p><?= $vd["nom"] ?></p>
<?php endforeach;

?>