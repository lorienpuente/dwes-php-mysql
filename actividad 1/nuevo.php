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
    <h1>Nuevo plato</h1>
    <form action="guardar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required>
        <label>Tipo:</label>
        <select name="tipo" required>
            <option value="primero">Primer plato</option>
            <option value="segundo">Segundo plato</option>
            <option value="postre">Postre</option>
        </select>
        <label>Ingredientes:</label>
        <input type="text" name="ingredientes" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>