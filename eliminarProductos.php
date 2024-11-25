<?php
//requiero la conexion de .php 
include 'conexion.php';
//recibo los valores
$id=$_GET['id'];
$eliminar ="DELETE FROM productos WHERE idProducto='$id'";

$resultado=@mysqli_query($conexion,$eliminar);

if($resultado){
    ('Location: modificarProductos.php');
}
else{
    echo "<script>
            alert('No se pudo eliminar el archivo');
            window.history.go(-1);
            </script>";
}