<?php
include_once 'bd.php';


$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$tipo = $_POST['tipo'];
$ingredientes = $_POST['ingredientes'] ?? [];


try {
    $conector->beginTransaction();


    // Guardar el plato
    $sql = "INSERT INTO platos (nombre, precio, tipo)
            VALUES (?, ?, ?)";


    $stmt = $conector->prepare($sql);
    $stmt->execute([$nombre, $precio, $tipo]);


    // Guardar la relación con cada ingrediente
    $sql = "INSERT INTO plato_ingrediente
            (nombre_plato, nombre_ingrediente)
            VALUES (?, ?)";


    $stmt = $conector->prepare($sql);


    foreach ($ingredientes as $ingrediente) {
        $stmt->execute([$nombre, $ingrediente]);
    }


    $conector->commit();


    header('Location: index.php');
    exit;


} catch (PDOException $e) {
    if ($conector->inTransaction()) {
        $conector->rollBack();
    }


    die('Error al guardar: ' . $e->getMessage());
}
