<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $usuarios = [
            "juan_perez" => [
                "contraseña" => "juan123",
                "rol" => "Administrador",
                "color_preferido" => "#d62e08"
            ],
            "maria_garcia" => [
                "contraseña" => "maria456",
                "rol" => "Editor",
                "color_preferido" => "#1785ce"
            ],
            "carlos_alvarez" => [
                "contraseña" => "carlos789",
                "rol" => "Editor",
                "color_preferido" => "#18c25f"
            ]
        ];
    ?>
    <?php
        $errores = array();
        $resultado = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = trim($_POST["nombre"]);
            $contraseña = trim($_POST["contraseña"]);

            

        }

    ?>

    <form action="EXTRA2.php" method="post">
        <label for="nombre"> Nombre de usuario: </label>
        <input type="text" name="nombre"><br><br>

        <label for="contraseña"> Contraseña: </label>
        <input type="text" name="contraseña"><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>