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
    include_once 'plato.php';

    $plato = new Plato(
        $_GET['nombre']
    );


    ?>
    <h1>Nuevo plato</h1>
    <form action="update.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value ="<?php echo $plato->nombre; ?>" required>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" value ="<?php echo $plato->precio; ?>" required>
        <label>Tipo:</label>
        <select name="tipo" required>
            <option value="primero" <?php echo ($plato->tipo == 'primero'); ?>>Primer plato</option>
            <option value="segundo" <?php echo ($plato->tipo == 'segundo'); ?>>Segundo plato</option>
            <option value="postre" <?php echo ($plato->tipo == 'postre'); ?>>Postre</option>
        </select>
        <button type="submit">Guardar</button>
    </form>

</body>
</html>