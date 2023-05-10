<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>CRUD EMPLEADOS</title>
</head>
<body>
    <?php 
        require "clases/Autenticar.php";
        $autenticar = new Autenticar();
    ?>
    <h1 class="text-center text-success">Inicio de Sesion</h1>
    <div class="container d-flex justify-content-center">
        <form action="" method="POST">
            <label for="">Correo Electronico</label>
            <input type="text" name="correo" class="form-control" required>

            <label for="">Contraseña</label>
            <input type="password" name="password" class="form-control" required>

            <input type="submit" class="btn btn-info mt-2" value="Iniciar Sesion">
        </form>
    </div>
    <?php  $autenticar->iniciarSesion(); ?>
</body>
</html>