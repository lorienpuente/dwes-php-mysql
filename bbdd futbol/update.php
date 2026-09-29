<?php
include 'bd.php';
include 'jugador.php';

$dorsal = $_POST['dorsal'];
$nombre = $_POST['nombre'];

$jugador = new Jugador($dorsal, $nombre);

$sql = "update jugadores set nombre = :nombre where dorsal = :dorsal";
$stmt = $conector->prepare($sql);
$stmt->bindParam(':dorsal', $jugador->dorsal, PDO::PARAM_INT);
$stmt->bindParam(':nombre', $jugador->nombre, PDO::PARAM_STR);

$stmt->execute();

header("Location: index.php");
?>