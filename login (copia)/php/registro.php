<?php
require_once "conexion.php";
$conexion=conexion();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$sql="INSERT INTO Usuario(dni,nombre,apellido,email,contraseña,direccion)
            values('','$nombre','$apellido','','$password','')";
            echo $result=mysqli_query($conexion,$sql);
?>