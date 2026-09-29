<?php

include 'bd.php';

$dorsal = $_POST['dorsal'];
$sql = "DELETE FROM jugadores WHERE dorsal = :dorsal";

$stmt = $conector->prepare($sql);
$stmt->bindParam(':dorsal', $dorsal, PDO::PARAM_INT);
$stmt->execute();

header('Location: index.php');
?>