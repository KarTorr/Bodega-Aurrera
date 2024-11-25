<?php
include 'conexion.php';

$id=$_POST['id'];
$idCategoria=$_POST['idCategoria'];
$marca=$_POST['marca'];

$actualizar="UPDATE categorias SET idCategoria='$idCategoria', categoria='$categoria' WHERE idCategoria='$id'";
$resultado=@mysqli_query($conexion,$actualizar);
if($resultado){
    echo "<script>
            alert('Se han guardado los caambios correctamente');
            window.location='modificarCategorias.php';
            <script>";
}
else{
    echo "<script>
    alert('No se pudo actualizar los datos');
    window.location='modificarCategorias.php';
    <script>";

}
?>