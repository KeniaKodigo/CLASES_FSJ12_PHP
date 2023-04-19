<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PayRoll</title>
</head>
<body>
    <?php include "recursos/header.php"; ?>

    <?php require "planilla.php"; ?>
    <main class="container">
        <h1>Planilla de Empleados</h1>

        <form action="" method="POST">
            <label for="">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">

            <label for="">Horas Trabajadas</label>
            <input type="number" class="form-control" name="horas">

            <label for="">Seleccion Tipo</label>
            <select name="tipo_empleado" id="" class="form-control">
                <option value="administrador">Administrador</option>
                <option value="cajero">Cajero</option>
                <option value="vendedor">Vendedor</option>
                <option value="conserge">Conserge</option>
            </select>

            <input type="submit" class="btn btn-success mt-4" value="Enviar Datos">
        </form>

        <?php
            if(isset($_POST['nombre'], $_POST['tipo_empleado'], $_POST['horas'])){
                $empleado = new PayRoll($_POST['nombre'], $_POST['tipo_empleado'], $_POST['horas']);
                $empleado->obtenerSueldoBruto();
                $empleado->obtenerISSS();
                $empleado->obtenerAFP();
                $empleado->obtenerSalarioNeto();
                echo $empleado->imprimirInfo();
            }
            

        ?>
    </main>

    <?php include "recursos/footer.php"; ?>
</body>
</html>