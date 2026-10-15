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
    include 'bd.php';
    ?>
    <h1>Lista de platos</h1>
    <form action="index.php" method="GET">


        <select name="tipo">
            <option value=""></option>
            <option value="Primer plato">Primer plato</option>
            <option value="Segundo plato">Segundo plato</option>
            <option value="Postre">Postre</option>
        </select>
        <input type="text" name="buscar" placeholder="Buscar por ingredientes">
        <button type="submit">Buscar</button>
    </form>
    <ul>
    <?php


            $query = "
        SELECT
            p.nombre,
            p.precio,
            p.tipo,
            i.nombre AS ingrediente
        FROM platos p
        LEFT JOIN plato_ingrediente pi
            ON p.nombre = pi.nombre_plato
        LEFT JOIN ingrediente i
            ON pi.nombre_ingrediente = i.nombre
        ORDER BY p.nombre
    ";


    $stmt = $conector->query($query);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $platos = [];


    foreach ($resultados as $row) {
        $nombre = $row['nombre'];


        if (!isset($platos[$nombre])) {
            $platos[$nombre] = new Plato(
                $row['nombre'],
                $row['precio'],
                $row['tipo'],
                []
            );
        }


        if ($row['ingrediente'] !== null) {
            $platos[$nombre]->ingredientes[] =
                $row['ingrediente'];
        }
    }

        $tipo = $_GET['tipo'] ?? '';
        $buscar = $_GET['buscar'] ?? '';
        foreach ($platos as $plato) {
            if (
                ($buscar == '' && $tipo == '') ||
                ($tipo != '' && $plato->tipo == $tipo && $buscar == '') ||
                ($tipo == '' && $buscar != '' && in_array($buscar, $plato->ingredientes)) ||
                ($tipo != '' && $plato->tipo == $tipo && $buscar != '' && in_array($buscar, $plato->ingredientes))
                ) {
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
