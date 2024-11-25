<?php
include 'conexion.php';

$idProducto=$_POST["idProducto"];
$idCategoria=$_POST["idCategoria"];
$idMarca=$_POST["idMarca"];
$producto=$_POST["producto"];
$precio=$_POST["precio"];
$descr=$_POST["descr"];
$novedad=$_POST["novedad"];
$vendido=$_POST["vendido"];
$imagen=$_POST["imagen"];

$insertar=" INSERT INTO productos(idProducto,idCategoria,idMarca,producto,precio,descr,novedad,vendido,imagen) VALUES('$idProducto','$idCategoria','$idMarca','$producto','$precio','$descr','$novedad','$vendido','$imagen')";

$verificar_producto=@mysqli_query($conexion,"SELECT * FROM productos WHERE producto='$producto'");
if (mysqli_num_rows($verificar_producto)>0){
    echo("El nombre del producto ya esta regristrado");
    exit;
}

$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
    echo("Error al registrar");
}
else{
    echo("Producto registrado correctamente");
}
mysqli_close($conexion);