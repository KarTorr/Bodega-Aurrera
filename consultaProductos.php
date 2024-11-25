<?php
include('conexion.php');
$producto="SELECT * FROM productos";
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

            <h2>CONSULTAS PRODUCTOS</h2>

        
        <form>
            <table>
                        <th>IdProducto</th>
                        <th>IdCategoria</th>
                        <th>IdMarca</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripción</th>
                        <th>Novedad</th>
                        <th>Vendido</th>
                        <th>Imagen</th>
                <?php
        $resultado=@mysqli_query($conexion,$producto);
        while ($row=@mysqli_fetch_assoc($resultado)){ ?>
            <tr align="center">
                <td><?php echo $row["idProducto"];?></td>
                <td><?php echo $row["idCategoria"];?></td>
                <td><?php echo $row["idMarca"];?></td>
                <td><?php echo $row["producto"];?></td>
                <td><?php echo $row["precio"];?></td>
                <td><?php echo $row["descr"];?></td>
                <td><?php echo $row["novedad"];?></td>
                <td><?php echo $row["vendido"];?></td>
                <td>
                    <img src="<?php echo $row["imagen"];?>" width="80" height="80">
                </td>
            </tr>

        <?php } ?>
            
            </table>
        </form>
    </div>
</form>
            <link rel="stylesheet" href="pagina_principal.css">
            <a href="principal.html" class="back-link">Regresar a administracion</a>
</body>
</html>