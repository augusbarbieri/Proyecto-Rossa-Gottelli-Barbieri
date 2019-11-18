<?php

class Usuario{

    private $dni;
    private $nombre;
    private $apellido;
    private $email;
    private $contraseña;
    private $direccion;
    private $Rango;

    //constructor

    public function __construct($dni,$nombre,$apellido,$email,$contraseña,$direccion,$Rango){
        $this->dni=$dni;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->email=$email;
        $this->contraseña=$contraseña;
        $this->direccion=$direccion;
        $this->Rango=$Rango;
    }

    //getters

    public function getDni(){
        return $this->dni;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getContraseña(){
        return $this->contraseña;
    }

    public function getRango(){
        return $this->Rango;
    }

    //setters

    public function setDni($dni)
    {
        $this->dni=$dni;
    }

    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
    }
    public function setApellido($apellido)
    {
        $this->apellido=$apellido;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function setPrecio($precio)
    {
        $this->precio=$precio;
    }

    public function setContraseña($contraseña){
        $this->contraseña=$contraseña;
    }

    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function setRango($Rango){
        $this->Rango=$Rango;
    }
    }

    ?>