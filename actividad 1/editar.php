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
    include 'plato.php';
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
    <h1>Editar plato</h1>
    <form action="update.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value ="<?php echo $plato->nombre; ?>">
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" value ="<?php echo $plato->precio; ?>">
        <label>Tipo:</label>
        <select name="tipo" required>
            <option value="Primer plato" <?php echo ($plato->tipo == 'Primer plato'); ?>>Primer plato</option>
            <option value="Segundo plato" <?php echo ($plato->tipo == 'Segundo plato'); ?>>Segundo plato</option>
            <option value="Postre" <?php echo ($plato->tipo == 'Postre'); ?>>Postre</option>
        </select>
        <p>Ingredientes</p>
        <label>Arroz</label>
        <input type="checkbox" name="ingredientes[]" value="Arroz" <?php echo in_array('Arroz', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Pollo</label>
        <input type="checkbox" name="ingredientes[]" value="Pollo" <?php echo in_array('Pollo', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Conejo</label>
        <input type="checkbox" name="ingredientes[]" value="Conejo" <?php echo in_array('Conejo', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Judías verdes</label>
        <input type="checkbox" name="ingredientes[]" value="Judías verdes" <?php echo in_array('Judías verdes', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Tomate</label>
        <input type="checkbox" name="ingredientes[]" value="Tomate" <?php echo in_array('Tomate', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Pepino</label>
        <input type="checkbox" name="ingredientes[]" value="Pepino" <?php echo in_array('Pepino', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Pimiento</label>
        <input type="checkbox" name="ingredientes[]" value="Pimiento" <?php echo in_array('Pimiento', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Aceite de oliva</label>
        <input type="checkbox" name="ingredientes[]" value="Aceite de oliva" <?php echo in_array('Aceite de oliva', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Vinagre</label>
        <input type="checkbox" name="ingredientes[]" value="Vinagre" <?php echo in_array('Vinagre', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Lechuga</label>
        <input type="checkbox" name="ingredientes[]" value="Lechuga" <?php echo in_array('Lechuga', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Aceitunas</label>
        <input type="checkbox" name="ingredientes[]" value="Aceitunas" <?php echo in_array('Aceitunas', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Queso feta</label>
        <input type="checkbox" name="ingredientes[]" value="Queso feta" <?php echo in_array('Queso feta', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Atún</label>
        <input type="checkbox" name="ingredientes[]" value="Atún" <?php echo in_array('Atún', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Gambas</label>
        <input type="checkbox" name="ingredientes[]" value="Gambas" <?php echo in_array('Gambas', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Mejillones</label>
        <input type="checkbox" name="ingredientes[]" value="Mejillones" <?php echo in_array('Mejillones', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Calamar</label>
        <input type="checkbox" name="ingredientes[]" value="Calamar" <?php echo in_array('Calamar', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Caldo de pescado</label>
        <input type="checkbox" name="ingredientes[]" value="Caldo de pescado" <?php echo in_array('Caldo de pescado', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Jamón serrano</label>
        <input type="checkbox" name="ingredientes[]" value="Jamón serrano" <?php echo in_array('Jamón serrano', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Leche</label>
        <input type="checkbox" name="ingredientes[]" value="Leche" <?php echo in_array('Leche', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Harina</label>
        <input type="checkbox" name="ingredientes[]" value="Harina" <?php echo in_array('Harina', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Mantequilla</label>
        <input type="checkbox" name="ingredientes[]" value="Mantequilla" <?php echo in_array('Mantequilla', $ingredientesSeleccionados) ? 'checked' : ''; ?>>
        <br>

        <label>Pan rallado</label>
        <input type="checkbox" name="ingredientes[]" value="Pan rallado" <?php echo in_array('Pan rallado', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Carrilleras de cerdo</label>
        <input type="checkbox" name="ingredientes[]" value="Carrilleras de cerdo" <?php echo in_array('Carrilleras de cerdo', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Cebolla</label>
        <input type="checkbox" name="ingredientes[]" value="Cebolla" <?php echo in_array('Cebolla', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Zanahoria</label>
        <input type="checkbox" name="ingredientes[]" value="Zanahoria" <?php echo in_array('Zanahoria', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Vino tinto</label>
        <input type="checkbox" name="ingredientes[]" value="Vino tinto" <?php echo in_array('Vino tinto', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Pulpo</label>
        <input type="checkbox" name="ingredientes[]" value="Pulpo" <?php echo in_array('Pulpo', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Patata</label>
        <input type="checkbox" name="ingredientes[]" value="Patata" <?php echo in_array('Patata', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Pimentón dulce</label>
        <input type="checkbox" name="ingredientes[]" value="Pimentón dulce" <?php echo in_array('Pimentón dulce', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Sal gruesa</label>
        <input type="checkbox" name="ingredientes[]" value="Sal gruesa" <?php echo in_array('Sal gruesa', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Entrecot de ternera</label>
        <input type="checkbox" name="ingredientes[]" value="Entrecot de ternera" <?php echo in_array('Entrecot de ternera', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Sal</label>
        <input type="checkbox" name="ingredientes[]" value="Sal" <?php echo in_array('Sal', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Pimienta negra</label>
        <input type="checkbox" name="ingredientes[]" value="Pimienta negra" <?php echo in_array('Pimienta negra', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Merluza</label>
        <input type="checkbox" name="ingredientes[]" value="Merluza" <?php echo in_array('Merluza', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Ajo</label>
        <input type="checkbox" name="ingredientes[]" value="Ajo" <?php echo in_array('Ajo', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Perejil</label>
        <input type="checkbox" name="ingredientes[]" value="Perejil" <?php echo in_array('Perejil', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Limón</label>
        <input type="checkbox" name="ingredientes[]" value="Limón" <?php echo in_array('Limón', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Romero</label>
        <input type="checkbox" name="ingredientes[]" value="Romero" <?php echo in_array('Romero', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Queso crema</label>
        <input type="checkbox" name="ingredientes[]" value="Queso crema" <?php echo in_array('Queso crema', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Galletas</label>
        <input type="checkbox" name="ingredientes[]" value="Galletas" <?php echo in_array('Galletas', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Azúcar</label>
        <input type="checkbox" name="ingredientes[]" value="Azúcar" <?php echo in_array('Azúcar', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Huevos</label>
        <input type="checkbox" name="ingredientes[]" value="Huevos" <?php echo in_array('Huevos', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Caramelo</label>
        <input type="checkbox" name="ingredientes[]" value="Caramelo" <?php echo in_array('Caramelo', $ingredientesSeleccionados) ? 'checked' : ''; ?>>

        <label>Canela</label>
        <input type="checkbox" name="ingredientes[]" value="Canela" <?php echo in_array('Canela', $ingredientesSeleccionados) ? 'checked' : ''; ?>>
        <button type="submit">Actualizar</button>
    </form>

</body>
</html>