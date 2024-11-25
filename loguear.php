<?php
    require 'conexion.php';
    session_start();

    $usuario=$_GET['usuario'];
    $clave=$_GET['clave'];

    $query="SELECT COUNT(*) as contar from iniciar where usuario='$usuario' and password='$clave'";
    $consulta=@mysqli_query($conexion,$query);
    $array=@mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['username']=$usuario;
        header("Location: index.html");
    }
    else{
        echo("DATOS INCORRECTOS");
    }

    ?>