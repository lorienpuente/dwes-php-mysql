<?php
include 'bd.php';

$nombre = $_POST['nombre'];

$sql = "DELETE FROM platos WHERE nombre = ?";
$stmt = $conector->prepare($sql);
$stmt->execute([$nombre]);


header ('Location: index.php');
?>