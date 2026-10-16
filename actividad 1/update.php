<?php
include 'bd.php';
include 'plato.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$tipo = $_POST['tipo'];
$ingredientes = $_POST['ingredientes'] ?? [];

$plato = new Plato($nombre, $precio, $tipo, $ingredientes);


try {
    $conector->beginTransaction();

    $sql = "UPDATE platos SET precio = ?, tipo = ? WHERE nombre = ?";
    $stmt = $conector->prepare($sql);
    $stmt->execute([$plato->precio, $plato->tipo, $plato->nombre]);

    $sqlDelete = "DELETE FROM plato_ingrediente WHERE nombre_plato = ?";
    $stmtDelete = $conector->prepare($sqlDelete);
    $stmtDelete->execute([$plato->nombre]);

    $sqlInsert = "INSERT INTO plato_ingrediente (nombre_plato, nombre_ingrediente) VALUES (?, ?)";
    $stmtInsert = $conector->prepare($sqlInsert);

    foreach ($plato->ingredientes as $ingrediente) {
        $stmtInsert->execute([$plato->nombre, $ingrediente]);
    }

    $conector->commit();
} catch (PDOException $e) {
    $conector->rollback();
    throw $e;
}  

header('Location: index.php');
exit;
?>