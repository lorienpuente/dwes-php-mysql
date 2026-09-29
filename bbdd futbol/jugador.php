<?php

class Jugador
{
    public $dorsal;
    public $nombre;

    function __construct($dorsal = 0, $nombre = 'Pepe')
    {
        $this->dorsal = $dorsal;
        $this->nombre = $nombre;
    }
}
?>