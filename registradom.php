<?php
include 'conexion.php';

$idMarca=$_POST["idMarca"];
$marca=$_POST["marca"];

$insertar=" INSERT INTO marcas(idMarca,marca) VALUES('$idMarca','$marca')";

$verificar_marca=@mysqli_query($conexion,"SELECT * FROM marcas WHERE marca='$marca'");
if (mysqli_num_rows($verificar_marca)>0){
    echo("El nombre de la marca ya esta regristrada");
    exit;
}

$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
    echo("Error al registrar");
}
else{
    echo("Marca registrada correctamente");
}
mysqli_close($conexion);