<?php

class Compra{

    private $idCompra;
    private $precio;
    private $FormaPago_idFormaPago;
    private $Envio_idEnvio;
    private $Usuario_dni;
    private $Computadora_idComputadora;

    //constructor

    public function __construct($idCompra,$precio,$FormaPago_idFormaPago,$Envio_idEnvio,$Usuario_dni,$Computadora_idComputadora){
        $this->idCompra = $idCompra;
        $this->precio=$precio;
        $this->FormaPago_idFormaPago=$FormaPago_idFormaPago;
        $this->Envio_idEnvio=$Envio_idEnvio;
        $this->Usuario_dni->=$Usuario_dni;
        $this->Computadora_idComputadora=$Computadora_idComputadora;
    }

    //getters

    public function getIdCompra(){
        return $this->idCompra;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getFormaPago(){
        return $this->FormaPago_idFormaPago;
    }

    public function getEnvio(){
        return $this->Envio_idEnvio;
    }

    public function getUsuario(){
        return $this->Usuario_dni;
    }

    public function getComputadora(){
        return $this->Computadora_idComputadora;
    }

    //setters

    public function setIdCompra($idCompra){
        $this->idCompra=$idCompra;
    }

    public function setPrecio($precio){
         $this->precio=$precio;
    }

    public function getFormaPago($FormaPago_idFormaPago){
         $this->FormaPago_idFormaPago=$FormaPago_idFormaPago;
    }

    public function getEnvio($Envio_idEnvio){
         $this->Envio_idEnvio=$Envio_idEnvio;
    }

    public function getUsuario($Usuario_dni){
         $this->Usuario_dni=$Usuario_dni;
    }

    public function getComputadora($Computadora_idComputadora){
         $this->Computadora_idComputadora=$Computadora_idComputadora;
    }





}

?>