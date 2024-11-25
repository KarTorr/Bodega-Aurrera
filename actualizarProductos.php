<?php
include ('conexion.php');
$id=$_GET["id"];
$producto="SELECT * FROM productos WHERE idProducto='$id'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="registradop.php">
        <div class="container">
            <br>
            <br>
            <h1>Bienvenido a Administracion</h1>
            <br>
            <br>
            <div class="menu">
                <div class="submenu">
                    <button>Altas</button>
                    <div class="submenu-content">
                        <a href="marcas.html">Marcas</a>
                        <a href="categorias.html">Categorias</a>
                        <a href="productos.html">Productos</a>
                    </div>
                </div>
                <div class="submenu">
                    <button>Consultas</button>
                    <div class="submenu-content">
                        <a href="consultaMarcas.php">Marcas</a>
                        <a href="consultaCategorias.php">Categorias</a>
                        <a href="consultaProductos.php">Productos</a>
                    </div>
                </div>
                <div class="submenu">
                    <button>Modificar y Eliminar</button>
                    <div class="submenu-content">
                        <a href="modificarMarcas.php">Marcas</a>
                        <a href="modificarCategorias.php">Categorias</a>
                        <a href="modificarProductos.php">Productos</a>
                    </div>
                </div>
            </div>

            <form action="actualizarModificar.php" method="post">

<table width="689" border="1" align="center" cellpadding="2" cellspacing="1">
    <tr>
        <td width="139" align="center" valign="middle"><div align="center">IdProducto:</div></td>
        <td width="139" align="center" valign="middle"><div align="center">IdCategoria:</div></td>
        <td width="139" align="center" valign="middle"><div align="center">IdMarca:</div></td>
        <td width="139" align="center" valign="middle"><div align="center">Nombre:</div></td>
        <td width="139" align="center" valign="middle"><div align="center">Precio:</div></td>
        <td width="139" align="center" valign="middle"><div align="center">Descripcion:</div></td>
        <td width="139" align="center" valign="middle"><div align="center">Novedades:</div></td>
        <td width="139" align="center" valign="middle"><div align="center">Vendido:</div></td>
        <td width="139" align="center" valign="middle"><div align="center">Archivo de la imagen:</div></td>
    </tr>

<?php
$resultado=@mysqli_query($conexion,$producto);
while ($row=@mysqli_fetch_assoc($resultado)) { ?>
    <tr align="center">
             <input type="hidden" value="<?php echo $row["idProducto"];?>" name="id">
        <td><input type="text" value="<?php echo $row["idProducto"];?>" name="idMarca"></td>
        <td><input type="text" value="<?php echo $row["idCategoria"];?>" name="idCategoria"></td>
        <td><input type="text" value="<?php echo $row["idMarca"];?>" name="idMarca"></td>
        <td><input type="text" value="<?php echo $row["producto"];?>" name="producto"></td>
        <td><input type="text" value="<?php echo $row["precio"];?>" name="precio"></td>
        <td><input type="text" value="<?php echo $row["descr"];?>" name="descr"></td>
        <td><input type="text" value="<?php echo $row["novedad"];?>" name="novedad"></td>
        <td><input type="text" value="<?php echo $row["vendido"];?>" name="vendido"></td>
        <td><input type="text" value="<?php echo $row["imagen"];?>" name="imagen"></td>
    </tr>
    <?php } @mysqli_free_result($resultado);?>
    <tr>
        <td colspan="9" align="center" valign="middle"><div align="center">
        <br>
        <br>
        <input type="submit" value="Actualizar">
</td>
</tr>
</form>
</table>
</center>
<link rel="stylesheet" href="pagina_principal.css">
            <a href="principal.html" class="back-link">Regresar a administracion</a>
</body>
</html>