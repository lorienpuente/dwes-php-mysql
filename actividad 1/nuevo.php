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
            <option value="Primer plato">Primer plato</option>
            <option value="Segundo plato">Segundo plato</option>
            <option value="Postre">Postre</option>
        </select>
        <p>Ingredientes</p>
        <label>Arroz</label>
        <input type="checkbox" name="ingredientes[]" value="Arroz">

        <label>Pollo</label>
        <input type="checkbox" name="ingredientes[]" value="Pollo">

        <label>Conejo</label>
        <input type="checkbox" name="ingredientes[]" value="Conejo">

        <label>Judías verdes</label>
        <input type="checkbox" name="ingredientes[]" value="Judías verdes">

        <label>Tomate</label>
        <input type="checkbox" name="ingredientes[]" value="Tomate">

        <label>Pepino</label>
        <input type="checkbox" name="ingredientes[]" value="Pepino">

        <label>Pimiento</label>
        <input type="checkbox" name="ingredientes[]" value="Pimiento">

        <label>Aceite de oliva</label>
        <input type="checkbox" name="ingredientes[]" value="Aceite de oliva">

        <label>Vinagre</label>
        <input type="checkbox" name="ingredientes[]" value="Vinagre">

        <label>Lechuga</label>
        <input type="checkbox" name="ingredientes[]" value="Lechuga">

        <label>Aceitunas</label>
        <input type="checkbox" name="ingredientes[]" value="Aceitunas">

        <label>Queso feta</label>
        <input type="checkbox" name="ingredientes[]" value="Queso feta">

        <label>Atún</label>
        <input type="checkbox" name="ingredientes[]" value="Atún">

        <label>Gambas</label>
        <input type="checkbox" name="ingredientes[]" value="Gambas">

        <label>Mejillones</label>
        <input type="checkbox" name="ingredientes[]" value="Mejillones">

        <label>Calamar</label>
        <input type="checkbox" name="ingredientes[]" value="Calamar">

        <label>Caldo de pescado</label>
        <input type="checkbox" name="ingredientes[]" value="Caldo de pescado">

        <label>Jamón serrano</label>
        <input type="checkbox" name="ingredientes[]" value="Jamón serrano">

        <label>Leche</label>
        <input type="checkbox" name="ingredientes[]" value="Leche">

        <label>Harina</label>
        <input type="checkbox" name="ingredientes[]" value="Harina">

        <label>Mantequilla</label>
        <input type="checkbox" name="ingredientes[]" value="Mantequilla">
        <br>

        <label>Pan rallado</label>
        <input type="checkbox" name="ingredientes[]" value="Pan rallado">

        <label>Carrilleras de cerdo</label>
        <input type="checkbox" name="ingredientes[]" value="Carrilleras de cerdo">

        <label>Cebolla</label>
        <input type="checkbox" name="ingredientes[]" value="Cebolla">

        <label>Zanahoria</label>
        <input type="checkbox" name="ingredientes[]" value="Zanahoria">

        <label>Vino tinto</label>
        <input type="checkbox" name="ingredientes[]" value="Vino tinto">

        <label>Pulpo</label>
        <input type="checkbox" name="ingredientes[]" value="Pulpo">

        <label>Patata</label>
        <input type="checkbox" name="ingredientes[]" value="Patata">

        <label>Pimentón dulce</label>
        <input type="checkbox" name="ingredientes[]" value="Pimentón dulce">

        <label>Sal gruesa</label>
        <input type="checkbox" name="ingredientes[]" value="Sal gruesa">

        <label>Entrecot de ternera</label>
        <input type="checkbox" name="ingredientes[]" value="Entrecot de ternera">

        <label>Sal</label>
        <input type="checkbox" name="ingredientes[]" value="Sal">

        <label>Pimienta negra</label>
        <input type="checkbox" name="ingredientes[]" value="Pimienta negra">

        <label>Merluza</label>
        <input type="checkbox" name="ingredientes[]" value="Merluza">

        <label>Ajo</label>
        <input type="checkbox" name="ingredientes[]" value="Ajo">

        <label>Perejil</label>
        <input type="checkbox" name="ingredientes[]" value="Perejil">

        <label>Limón</label>
        <input type="checkbox" name="ingredientes[]" value="Limón">

        <label>Romero</label>
        <input type="checkbox" name="ingredientes[]" value="Romero">

        <label>Queso crema</label>
        <input type="checkbox" name="ingredientes[]" value="Queso crema">

        <label>Galletas</label>
        <input type="checkbox" name="ingredientes[]" value="Galletas">

        <label>Azúcar</label>
        <input type="checkbox" name="ingredientes[]" value="Azúcar">

        <label>Huevos</label>
        <input type="checkbox" name="ingredientes[]" value="Huevos">

        <label>Caramelo</label>
        <input type="checkbox" name="ingredientes[]" value="Caramelo">

        <label>Canela</label>
        <input type="checkbox" name="ingredientes[]" value="Canela">
    
        <button type="submit">Guardar</button>
    </form>
</body>
</html>