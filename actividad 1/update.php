<?php
include 'bd.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$tipo = $_POST['tipo'];


header('Location: index.php');
?>