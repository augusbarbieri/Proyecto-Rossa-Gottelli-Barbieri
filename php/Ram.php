<?php

class Ram extends Producto{

    private $idRam;
    
    //constructor

    public function __construct($precio,$marca,$modelo,$descripcion,$idRam){
        parent::__construct($precio,$marca,$modelo,$descripcion);
        $this->idRam=$idRam;
    }

    //getters

    public function getIdRam(){
        return $this->idRam;
    }

    //setters

    public function setIdRam($idRam){
        $this->idRam=$idRam;
    }
}