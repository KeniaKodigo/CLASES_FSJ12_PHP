<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Planilla</title>
</head>
<body>
    <?php
        #llamando el archivo planilla.php (include o require)
        require "planilla.php";
    ?>
    <main class="container">
        <h1>Planilla de Empleados</h1>

        <form action="" method="POST">
            <label for="">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">

            <label for="">Horas Trabajadas</label>
            <input type="number" class="form-control" name="horas">

            <label for="">Tarifa por Hora</label>
            <input type="text" class="form-control" name="tarifa">

            <input type="submit" class="btn btn-success mt-4" value="Enviar Datos">
        </form>
        <?php
    
        /**
         * variables magicas = $_POST[]
         * isset() => es un metodo donde se valida si los campos estan vacios o no
         */

        if(isset($_POST['nombre'], $_POST['tarifa'], $_POST['horas'])){
            $planilla = new Planilla($_POST['nombre'], $_POST['tarifa'], $_POST['horas']);        
            $planilla->obtenerSueldoBruto();
            $planilla->obtenerISSS();
            $planilla->obtenerAFP();
            $planilla->obtenerSalarioNeto();
            echo $planilla->imprimirInfo();
        }

        
    ?>
    </main>
    
</body>
</html>