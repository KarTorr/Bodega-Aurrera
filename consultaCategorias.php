<?php
include('conexion.php');
$categoria="SELECT * FROM categorias";
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
<form method="post" action="registradoc.php">
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

            <h2>CONSULTAS CATEGORIAS</h2>

        
        <form>
            <table>
                <tr>
                    <th>idCategoria:</th>
                    <th>Nombre:</th>
                </tr>
                <?php
        $resultado=@mysqli_query($conexion,$categoria);
        while ($row=@mysqli_fetch_assoc($resultado)){ ?>
            <tr align="center">
                <td><?php echo $row["idCategoria"];?></td>
                <td><?php echo $row["categoria"];?></td>
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