<?php

class FormaPago{

    private $idFormaPago;
    private $efectivoTarjeta;
    private $tarjeta;

    //constructor

    public function __construct($idFormaPago,$efectivoTarjeta,$tarjeta){
        $this->idFormaPago=$idFormaPago;
        $this->efectivoTarjeta=$efectivoTarjeta;
        $this->tarjeta=$tarjeta;
    }

    //getters

    public function getIdFormaPago(){
        return $this->idFormaPago;
    }

    public function getEfectivoTarjeta(){
        return $this->efectivoTarjeta;
    }

    public function getTarjeta(){
        return $this->tarjeta;
    }

    //setters

    public function setidFormaPago($idFormaPago)
    {
        $this->FormaPago=$idFormaPago;
    }

    public function setEfectivoTarjeta($efectivoTarjeta)
    {
        $this->efectivoTarjeta=$efectivoTarjeta;
    }

    public function setTarjeta($tarjeta)
    {
        $this->tarjeta=$tarjeta;
    }
}

?>