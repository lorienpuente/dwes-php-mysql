<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
include 'plato.php';
include 'nav.php';
include 'bd.php';

$nombre = $_GET['nombre'];
$sql = 'SELECT * FROM platos WHERE nombre = "'.$nombre.'"';
$stmt = $conector->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$plato = new Plato($results[0]['nombre'], $results[0]['precio'], $results[0]['tipo']);

$sqlIng = 'SELECT nombre_ingrediente FROM plato_ingrediente WHERE nombre_plato = ?';
$stmtIng = $conector->prepare($sqlIng);
$stmtIng->execute([$plato->nombre]);
$ingredientesSeleccionados = $stmtIng->fetchAll(PDO::FETCH_COLUMN);


?> 
<h1>Detalles del plato</h1>
    
        <label>Nombre: <?php echo($plato->nombre); ?></label><br>
        <label>Precio: <?php echo $plato->precio; ?> €</label><br>
        <label>Tipo: <?php echo $plato->tipo; ?></label><br>
        <p>Ingredientes</p>
        <ul>
            <?php foreach ($ingredientesSeleccionados as $ingrediente): ?>
            <li><?php echo ($ingrediente); ?></li>
            <?php endforeach; ?>
        </ul>
        
    
</body>
</html>