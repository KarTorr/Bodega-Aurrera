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
                        <a href="consultaCategorias.php">Categorias</a>
                        <a href="consultaProductos.php">Productos</a>
                    </div>
                </div>
                <div class="submenu">
                    <button>Modificar y Eliminar</button>
                    <div class="submenu-content">
                        <a href="modificarMarcas.php">Marcas</a>
                        <a href="modificarProductos.php">Productos</a>
                    </div>
                </div>
            </div>

            <h2>MODIFICAR CATEGORIAS</h2>

    
<table>
    <tr>
        <th>IdCategoria:</th>
        <th>Nombre:</th>
        <th>Operacion</th>
    </tr>
<?php
$resultado=@mysqli_query($conexion,$categoria);
while($row=@mysqli_fetch_assoc($resultado)){ ?>
<tr align="center">
<td><?php echo $row["idCategoria"];?></td>
<td><?php echo $row["categoria"];?></td>
<td>
<a href="actualizarCategorias.php?id=<?php echo $row["idCategoria"]; ?>" class="table__item__link">Editar</a>
<a href="eliminarCategorias.php?id=<?php echo $row["idCategoria"]; ?>" class="table__item__link_eliminar">Eliminar</a>
</td>
</tr>
<?php }mysqli_free_result($resultado);?>
</table>
</center> 
<script src="confirmacion.js"></script>

<link rel="stylesheet" href="pagina_principal.css">
            <a href="principal.html" class="back-link">Regresar a administracion</a>
</body>
</html>