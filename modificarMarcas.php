<?php
include('conexion.php');
$marca="SELECT * FROM marcas";
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
                        <a href="modificarCategorias.php">Categorias</a>
                        <a href="modificarProductos.php">Productos</a>
                    </div>
                </div>
            </div>

            <h2>MODIFICAR MARCAS</h2>

    
<table>
    <tr>
        <th>IdMarca:</th>
        <th>Nombre:</th>
        <th>Operacion</th>
    </tr>
<?php
$resultado=@mysqli_query($conexion,$marca);
while($row=@mysqli_fetch_assoc($resultado)){ ?>
<tr align="center">
<td><?php echo $row["idMarca"];?></td>
<td><?php echo $row["marca"];?></td>
<td>
<a href="actualizarMarcas.php?id=<?php echo $row["idMarca"]; ?>" class="table__item__link">Editar</a>
<a href="eliminarMarcas.php?id=<?php echo $row["idMarca"]; ?>" class="table__item__link_eliminar">Eliminar</a>
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