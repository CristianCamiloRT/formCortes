<?php
require('../Model/Connection.php');

if(isset($_POST['insert'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $producto = $_POST['producto'];
    
    $query = "INSERT INTO datos (id, nombre, correo, celular, producto) VALUES (NULL, '$nombre', '$correo', '$celular', '$producto')";
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '<script> alert("Se guardo el usuario correctamente"); </script>';
        echo '<script> window.open("../index.php", "_self"); </script>';
    }
}
?>