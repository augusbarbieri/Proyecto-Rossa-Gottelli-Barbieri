<?php

class Producto{

    private $precio;
    private $marca;
    private $modelo;
    private $descripcion;


    //constructor

    public function __construct($precio,$marca,$modelo,$descripcion){
        $this->precio=$precio;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->descripcion=$descripcion;
    }

    //getters

    public function getPrecio(){
        return $this->precio;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getDescripcion(){
        return $this->descripion;
    }

    //setters

    public function setPrecio($precio)
    {
        $this->precio=$precio;
    }

    public function setMarca($marca)
    {
        $this->marca=$marca;
    }
    public function setModelo($modelo)
    {
        $this->modelo=$modelo;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion=$descripcion;
    }
}

?>