<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a href="#" class="btn btn-primary">Volver</a>
    <form class="container" action="../Controller/AddController.php" method="post" align="center">
        <div class="mb-3">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="correo" placeholder="Correo Electrónico" required>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="celular" placeholder="Celular" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="producto" placeholder="Producto de Interes" required>
        </div>
        <button type="submit" class="btn btn-primary" name="insert">Registrar</button>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>