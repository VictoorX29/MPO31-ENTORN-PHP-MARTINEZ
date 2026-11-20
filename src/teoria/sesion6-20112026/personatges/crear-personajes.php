<?php
require_once('config.php');
$pdo = db();
$sql = "SELECT id, nom FROM videojocs ORDER BY nom";
$stmt = $pdo->query($sql);
$v = $stmt->fetchAll();

var_dump($v);
?>