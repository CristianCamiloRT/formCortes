<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
            <img src="assets/img/logo.png" alt="" width="120" height="40">
            </a>
        </div>
    </nav>
    <section class="container gx-5">
        <a href="#" class="btn btn-primary mt-4 mb-3 btn-volver">Volver</a>
        <p class="titulo m-0">Registro</p>
        <p class="subtitulo m-0">Ingresa tus datos</p>
        <div class="card_form">
            <form action="../Controller/AddController.php" method="POST" align="center">
                <div class="card_form__bg_inputs px-3 py-4 mt-4">
                    <div class="mb-2">
                        <input type="text" class="form-control card_form__inputs" name="nombre" placeholder="Nombre Completo" required>
                    </div>
                    <div class="mb-2">
                        <input type="email" class="form-control card_form__inputs" name="correo" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="mb-2">
                        <input type="number" class="form-control card_form__inputs" name="celular" placeholder="Celular" required>
                    </div>
                    <div class="">
                        <input type="text" class="form-control card_form__inputs" name="producto" placeholder="Producto de interes" required>
                    </div>
                </div>
                <div class="form_small text-start text-md-center px-3 mt-5 mx-auto">
                    <small class="form_small__text">Sus datos personales serán tratados únicamente para eventos de esta votación, una vez finalizada sus datos serán eliminados.</small>
                </div>
                <button type="submit" class="btn btn-primary btn-registrar mt-4 mb-5 px-4" name="insert">Registrar</button>
            </form>
        </div>
    </section> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>