<?php
require('../Model/Connection.php');
require_once "../assets/captcha/recaptchalib.php"; 



if(isset($_POST['insert'])){

    $secret = "6LcPs8kgAAAAAEPh0h-xjy_h2akrbPtA1sO7uWzT";
    $response = null;
    // Verificamos la clave secreta
    $reCaptcha = new ReCaptcha($secret);
    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }
    
    if ($response != null && $response->success) {
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
    } else {
        echo '<script> alert("Error en el reCAPTCHA, intentelo nuevamente"); </script>';
        echo '<script> window.open("../index.php", "_self"); </script>';
    }
}
?>