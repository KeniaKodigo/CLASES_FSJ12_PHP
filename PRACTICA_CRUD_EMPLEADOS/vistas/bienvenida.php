<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <?php /**
         *  require, include
         *  */ 
            include "./modulos/nav.php";
        ?>
    </header>
    <div class="container">
        <h1 class="text-center text-primary mt-5">SISTEMA DE GESTION DE EMPLEADO</h1>
        <h3>Bienvenido/a, <?php echo $_SESSION['nombre_usuario']; ?></h3>
    </div>
    <?php include "./modulos/footer.php"; ?>
</body>
</html>