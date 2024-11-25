<?php
include 'conexion.php';

$nombre=$_POST["nombre"];
$horasT=$_POST["horasT"];
$cuotaH=$_POST["cuotaH"];
$sueldo=$_POST["sueldo"];
$imagen=$_POST["imagen"];

$insertar=" INSERT INTO empleado(nombre,horasT,cuotaH,sueldo,imagen) VALUES('$nombre','$horasT','$cuotaH','$sueldo','$imagen')";

$verificar_nombre=mysqli_query($conexion,"SELECT * FROM empleado WHERE nombre='$nombre'");
if (mysqli_num_rows($verificar_nombre)>0){
    echo("El nombre del empleado ya esta regristrado");
    exit;
}

$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
    echo("Error al registrarse");
}
else{
    echo("Usuario registrado correctamente");
}
mysqli_close($conexion);