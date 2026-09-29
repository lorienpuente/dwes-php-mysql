<?php
echo "Nombre: " . $_POST['nombre'] . "<br>";
echo "Apellido: " . $_POST['apellido'] . "<br>";
if(empty($_POST['apellido']))
    echo "Variable apellido esta vacia";
?>