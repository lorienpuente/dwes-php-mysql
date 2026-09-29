<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once 'nav.php';
    include 'jugador.php';
    include 'bd.php';

    $dorsal = $_GET['dorsal'];
    $query = 'SELECT * FROM jugadores WHERE dorsal = '.$dorsal;
        $stmt = $conector->query($query);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $jugador = new Jugador($results[0]['dorsal'], $results[0]['nombre']);
    ?>
    <h1>Nuevo jugador</h1>
    <form action="update.php" method="POST">
        <label>Dorsal:</label>
        <input type="number" name="dorsal" value ="<?php echo $jugador->dorsal; ?>" required>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value ="<?php echo $jugador->nombre; ?>" required>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>