<?php
include ('conexion.php');
$id=$_GET["id"];
$categoria="SELECT * FROM categorias WHERE idCategoria='$id'";
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
<form method="post" action="registradom.php">
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

            <form action="actualizarModificarc.php" method="post">

<table width="689" border="1" align="center" cellpadding="2" cellspacing="1">
    <tr>
        <td width="139" align="center" valign="middle"><div align="center">IdCategoria:</div></td>
        <td width="142" align="center" valign="middle"><div align="center">Nombre:</div></td>
    </tr>

<?php
$resultado=@mysqli_query($conexion,$categoria);
while ($row=@mysqli_fetch_assoc($resultado)) { ?>
    <tr align="center">
             <input type="hidden" value="<?php echo $row["idCategoria"];?>" name="id">
        <td><input type="text" value="<?php echo $row["idCategoria"];?>" name="idCategoria"></td>
        <td><input type="text" value="<?php echo $row["categoria"];?>" name="categoria"></td>
    </tr>
    <?php } @mysqli_free_result($resultado);?>
    <tr>
        <td colspan="2" align="center" valign="middle"><div align="center">
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