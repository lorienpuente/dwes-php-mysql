<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .ticket {
            padding: 20px;
            margin-top: 20px;
            width: 350px;
            border: 1px solid black;
        }

        .socio {
            background-color: lightgreen;
        }

        .no-socio {
            background-color: lightgray;
        }
    </style>

</head>
<body>
   
    <?php
    $errores = array();
    $resultado = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST["nombre"]);
        $precio = trim($_POST["precio"]);
        $cantidad = trim($_POST["cantidad"]);

        if (empty($nombre)&& !empty($precio) && !empty($cantidad))
            array_push($errores, "El campo nombre está vacio");

        if ($precio <= 0)
            array_push($errores, "El campo precio tiene que ser mayor que 0");

        if ($cantidad <= 0)
            array_push($errores, "El campo cantidad tiene que ser mayor que 0");


        // Comprobamos si el cliente es socio
        if (isset($_POST["socio"])) {
            $esSocio = true;
        } else {
            $esSocio = false;
        }


        // Función para calcular el total
        function calcularTotal($precio, $cantidad, $esSocio) {
            
            $subtotal = $precio * $cantidad;

            if ($esSocio) {
                $descuento = $subtotal * 0.10;
            } else {
                $descuento = 0;
            }

            $subtotalConDescuento = $subtotal - $descuento;

            $iva = $subtotalConDescuento * 0.21;

            $total = $subtotalConDescuento + $iva;

            return array(
                "subtotal" => $subtotal,
                "descuento" => $descuento,
                "total" => $total
            );
        }


        // Si no hay errores, calculamos el ticket
        if (empty($errores)) {
            $resultado = calcularTotal($precio, $cantidad, $esSocio);
        }
    }
    ?>

    <form action="EXTRA1.php" method="post">
        <?php 
        
        if (!empty($errores)){
            foreach($errores as $error){
                echo '<p style="color:red">'.$error.'</p>';
            }
        } 
            
        ?>

        <label for="nombre"> Nombre del producto:</label>
        <input type="text" name="nombre"><br><br>

        <label for="precio"> Precio:</label>
        <input type="number" step=".01" name="precio" required><br><br>

        <label for="cantidad"> Cantidad:</label>
        <input type="number" name="cantidad" required><br><br>

        <label for="socio"> Socio:</label>
        <input type="checkbox" name="socio"><br><br>

        <input type="submit" value="Enviar">
    </form>


    <?php

    // Mostramos el ticket solamente si no hay errores
    if ($resultado != null) {

        if ($esSocio) {
            $clase = "socio";
        } else {
            $clase = "no-socio";
        }

        echo '<div class="ticket ' . $clase . '">';

        echo '<h2>Ticket de compra</h2>';

        echo '<p><strong>Producto:</strong> ' . $nombre . '</p>';

        echo '<p><strong>Precio unitario:</strong> ' . number_format($precio, 2, ',', '.') . ' €</p>';

        echo '<p><strong>Cantidad:</strong> ' . $cantidad . '</p>';

        echo '<hr>';

        echo '<p><strong>Subtotal:</strong> ' . number_format($resultado["subtotal"], 2, ',', '.') . ' €</p>';

        echo '<p><strong>Descuento:</strong> -' . number_format($resultado["descuento"], 2, ',', '.') . ' €</p>';

        echo '<p><strong>IVA (21%):</strong> ' . number_format(($resultado["total"] - ($resultado["subtotal"] - $resultado["descuento"])), 2, ',', '.') . ' €</p>';

        echo '<h3>Total: ' . number_format($resultado["total"], 2, ',', '.') . ' €</h3>';

        echo '</div>';
    }

    ?>

</body>
</html> 



 