<?php
include 'conexion.php';

$id=$_POST['id'];
$idProducto=$_POST['idProducto'];
$producto=$_POST['producto'];

$actualizar="UPDATE productos SET idProducto='$idProducto', idCategoria='$idCategoria', idMarca='$idMarca', producto='$producto'
                precio='$precio', descr='$descr', novedad='$novedad', vendido='$vendido', imagen='$imagen' WHERE idProducto='$id'";
$resultado=@mysqli_query($conexion,$actualizar);
if($resultado){
    echo "<script>
        alert('Se han guardado los caambios correctamente');
        window.location='modificarProductos.php';
    <script>";
}
else{
    echo "<script>
        alert('No se pudo actualizar los datos');
        window.location='modificarProductos.php';
    <script>";

}
?>