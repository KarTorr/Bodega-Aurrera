<?php
//requiero la conexion de .php 
include 'conexion.php';
//recibo los valores
$id=$_GET['id'];
$eliminar ="DELETE FROM marcas WHERE idMarca='$id'";

$resultado=@mysqli_query($conexion,$eliminar);

if($resultado){
    header("Location: modificarMarcas.php");
}
else{
    echo "<script>
            alert('No se pudo eliminar el archivo');
            window.history.go(-1);
            </script>";
}