<?php
include 'conexion.php';

$id=$_POST['id'];
$idMarca=$_POST['idMarca'];
$marca=$_POST['marca'];

$actualizar="UPDATE marcas SET idMarca='$idMarca', marca='$marca' WHERE idMarca='$id'";
$resultado=@mysqli_query($conexion,$actualizar);
if($resultado){
    echo "<script>
            alert('Se han guardado los caambios correctamente');
            window.location='modificarMarcas.php';
            <script>";
}
else{
    echo "<script>
    alert('No se pudo actualizar los datos');
    window.location='modificarMarcas.php';
    <script>";

}
?>