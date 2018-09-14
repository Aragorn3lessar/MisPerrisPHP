<?php

class Perro{
    private $id;
    private $nombre;
    private $raza;
    private $tamano;
    private $color;
    
    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getRaza() {
        return $this->raza;
    }

    function getTamano() {
        return $this->tamano;
    }

    function getColor() {
        return $this->color;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setRaza($raza) {
        $this->raza = $raza;
    }

    function setTamano($tamano) {
        $this->tamano = $tamano;
    }

    function setColor($color) {
        $this->color = $color;
    }


}

