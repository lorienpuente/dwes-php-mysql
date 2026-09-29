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
    ?>
    <h1>Nuevo jugador</h1>
    <form action="guardar.php" method="POST">
        <label>Dorsal:</label>
        <input type="number" name="dorsal" required>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>