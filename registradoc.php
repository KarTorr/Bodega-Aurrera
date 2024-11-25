<?php
include 'conexion.php';

$idCategoria=$_POST["idCategoria"];
$categoria=$_POST["categoria"];

$insertar=" INSERT INTO categorias(idCategoria,categoria) VALUES('$idCategoria','$categoria')";

$verificar_categoria=mysqli_query($conexion,"SELECT * FROM categorias WHERE categoria='$categoria'");
if (@mysqli_num_rows($verificar_categoria)>0){
    echo("El nombre de la categoria ya esta regristrado");
    exit;
}

$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
    echo("Error al registrar");
}
else{
    echo("Categoria registrada correctamente");
}
mysqli_close($conexion);