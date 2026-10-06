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
    <?php
        $platos = array();

        $buscar = $_GET['buscar'] ?? '';
        foreach ($platos as $plato) {
            if (str_contains($plato->nombre, $buscar) || $buscar == '') {
                echo '<li>';
                echo '<p>' . $plato->nombre . '</p>';
                echo '<p>' . $plato->precio . '</p>';
                echo '<p>' . $plato->tipo . '</p>';
                echo '<form action="borrar.php" method="POST">';
                echo '<input type="hidden" name="dorsal" value="' . $jugador->dorsal . '">';
                echo '<button type="submit">Borrar</button>';
                echo '</form>';
                echo '<form action="editar.php" method="GET">';
                echo '<input type="hidden" name="dorsal" value="' . $jugador->dorsal . '">';
                echo '<button type="submit">Editar</button>';
                echo '</form>';
                echo '</li>';
            }
        }
        ?>
    </ul>
</body>
</html>