<?php

class Plato {
    public $nombre;
    public $precio;
    public $tipo;

    function __construct($nombre, $precio, $tipo) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->tipo = $tipo;
    }
}
?>