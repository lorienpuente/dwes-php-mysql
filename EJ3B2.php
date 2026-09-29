<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    //$colores = [azul, verde, rojo];
    //echo $colores[0];
    
    $colores = array();
    //array_push($colores, 'azul'); poner valor al final
    $colores[0] = 'azul';
    $colores[1] = 'verde';
    $colores[2] = "rojo";

    echo $colores[0];

    //print_r($colores);muestra array
    //var_dump($colores);muestra array

    ?>
</body>
</html>