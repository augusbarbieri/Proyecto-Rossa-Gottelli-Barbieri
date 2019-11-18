<?php

class Envio{

    private $idEnvio;
    private $direccion;
    private $costo;
    private $localidad;
    private $codigoPostal;

    //constructor

    public function __construct($idEnvio,$direccion,$costo,$localidad,$codigoPostal)
    {
        $this->idEnvio=$idEnvio;
        $this->direccion=$direccion;
        $this->costo=$costo;
        $this->localidad=$localidad;
        $this->codigoPostal=$codigoPostal;
    }

    //getters

    public function getIdEnvio(){
        return $this->idEnvio;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getCosto(){
        return $this->costo;
    }

    public function getLocalidad(){
        return $this->localidad;
    }
    public function getCodigoPostal(){
        return $this->codigoPostal;
    }

    //setters

    public function setIdEnvio($idEnvio)
    {
        $this->idEnvio=$idEnvio;
    }

    public function setDireccion($direccion)
    {
        $this->direccion=$direccion;
    }

    public function setCosto($costo)
    {
        $this->costo=$costo;
    }

    public function setLocalidad($localidad)
    {
        $this->localidad=$localidad;
    }

    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal=$codigoPostal;
    }
}

?>