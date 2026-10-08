<?php

class Plato {
    public $nombre;
    public $precio;
    public $tipo;
    public $ingredientes;

    function __construct($nombre, $precio = 0, $tipo = 0, $ingredientes = []) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->tipo = $tipo;
        $this->ingredientes = $ingredientes;
    }
}
?>