<?php
class Placavideo extends Producto{
    private $idPlacavideo;
    
    //constructor
    public function __construct($precio,$marca,$modelo,$descripcion,$idPlacavideo){
        parent::__construct($precio,$marca,$modelo,$descripcion);
        $this->idPlacavideo=$idPlacavideo;
    }
    //getters
    public function getIdPlacavideo(){
        return $this->idPlacavideo;
    }
    //setters
    public function setIdPlacavideo($idPlacavideo){
        $this->idPlacavideo=$idPlacavideo;
    }
}


  ?>
