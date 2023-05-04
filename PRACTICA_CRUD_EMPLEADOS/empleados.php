<?php require "./clases/Empleado.php";  ?>
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
    <?php 
        $empleado = new Empleado();
        $datos = $empleado->getEmpleados();
    ?>
    <h1 class="text-center">Lista de Empleados</h1>
    <div class="container">
    <table class="table table-dark">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Carnet</th>
            <th>Cargo</th>
            <th colspan="3">Acciones</th>
        </thead>
        <tbody>
            <?php foreach($datos as $item) { ?>
                <tr>
                    <td><?php echo $item["nombre"]; ?></td>
                    <td><?php echo $item["apellido"]; ?></td>
                    <td><?php echo $item["carnet"]; ?></td>
                    <td><?php echo $item["id_cargo"]; ?></td>
                    <td>
                        <button class="btn btn-secondary">Ver Mas</button>
                    </td>
                    <td>
                        <button class="btn btn-info">Actualizar</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>