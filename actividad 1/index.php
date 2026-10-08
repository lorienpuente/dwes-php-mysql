<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'nav.php';
    include 'plato.php';
    ?>
    <h1>Lista de platos</h1>
    <form action="index.php" method="GET">
        <input name="buscar" type="text" placeholder="Buscar plato">
        <button type="submit">Buscar</button>
    </form>
    <ul>
    <?php
        $platos = array(

    new Plato(
        "Paella Valenciana",
        15.50,
        "Primer plato",
        "Arroz, pollo, conejo, judías verdes, garrofón, tomate, azafrán y aceite de oliva"
    ),

    new Plato(
        "Gazpacho Andaluz",
        6.00,
        "Primer plato",
        "Tomate, pepino, pimiento, cebolla, ajo, pan, aceite de oliva, vinagre y sal"
    ),

    new Plato(
        "Ensalada Mediterránea",
        7.50,
        "Primer plato",
        "Lechuga, tomate, cebolla, aceitunas, queso feta, atún y aceite de oliva"
    ),

    new Plato(
        "Sopa de Marisco",
        9.00,
        "Primer plato",
        "Gambas, mejillones, calamar, pescado, tomate, cebolla, ajo y caldo de pescado"
    ),

    new Plato(
        "Croquetas de Jamón",
        6.50,
        "Primer plato",
        "Jamón serrano, leche, harina, mantequilla, cebolla, huevo y pan rallado"
    ),

    new Plato(
        "Carrileras de Cerdo",
        8.50,
        "Segundo plato",
        "Carrilleras de cerdo, cebolla, zanahoria, ajo, vino tinto, caldo de carne y aceite de oliva"
    ),

    new Plato(
        "Pulpo a la Gallega",
        15.00,
        "Segundo plato",
        "Pulpo, patata, pimentón dulce, pimentón picante, sal gruesa y aceite de oliva"
    ),

    new Plato(
        "Entrecot de Ternera",
        18.00,
        "Segundo plato",
        "Entrecot de ternera, sal, pimienta negra y aceite de oliva"
    ),

    new Plato(
        "Merluza a la Plancha",
        13.50,
        "Segundo plato",
        "Merluza, ajo, perejil, limón, sal y aceite de oliva"
    ),

    new Plato(
        "Pollo al Horno",
        12.00,
        "Segundo plato",
        "Pollo, patata, cebolla, ajo, romero, limón, sal y aceite de oliva"
    ),

    new Plato(
        "Tarta de queso",
        5.50,
        "Postre",
        "Queso crema, galletas, mantequilla, azúcar, huevos y nata"
    ),

    new Plato(
        "Flan de Huevo",
        4.50,
        "Postre",
        "Huevos, leche, azúcar y caramelo"
    ),

    new Plato(
        "Arroz con Leche",
        4.00,
        "Postre",
        "Arroz, leche, azúcar, canela y piel de limón"
    )

);


        $buscar = $_GET['buscar'] ?? '';
        foreach ($platos as $plato) {
            if (str_contains($plato->nombre, $buscar) || str_contains($plato->tipo, $buscar) || $buscar == '') {
                echo '<li>';
                echo '<p>' . $plato->nombre . '</p>';
                echo '<p>' . $plato->precio . " €" . '</p>';
                echo '<p>' . $plato->tipo . '</p>';
                echo '<form action="ver.php" method="GET">';
                echo '<input type="hidden" name="nombre" value="' . $plato->nombre . '">';
                echo '<button type="submit">Ver ingredientes</button>';
                echo '</form>';
                echo '<form action="borrar.php" method="POST">';
                echo '<input type="hidden" name="nombre" value="' . $plato->nombre . '">';
                echo '<button type="submit">Borrar</button>';
                echo '</form>';
                echo '<form action="editar.php" method="GET">';
                echo '<input type="hidden" name="nombre" value="' . $plato->nombre . '">';
                echo '<button type="submit">Editar</button>';
                echo '</form>';
                echo '</li>';
            }
        }
        ?>
    </ul>
</body>
</html>