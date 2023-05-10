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
        <?php include "./modulos/nav.php"; ?>
    </header>
    <?php 
        require "../clases/Empleado.php";
        $empleado = new Empleado();
        $datos = $empleado->getEmpleados();
    ?>
    <h1 class="text-center">Lista de Empleados Activos</h1>
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
                    <td><?php echo $item["cargo"]; ?></td>
                    <td>
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalEmpleado<?php echo $item["id"]; ?>">Ver Mas</button>
                    </td>
                    <td>
                        <form action="./actualizarEmpleado.php" method="POST">
                            <input type="hidden" name="id_empleado" value="<?php echo $item["id"]; ?>">
                            <input type="submit" class="btn btn-info" value="Editar" />
                        </form>
                    </td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="id_empleado" value="<?php echo $item["id"]; ?>">
                            <input type="submit" class="btn btn-danger" value="Eliminar" />
                        </form>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="ModalEmpleado<?php echo $item["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $item["nombre"] .  " " . $item["apellido"]; ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- asignamos los datos del empleado -->
                        <h3 class="text-center text-primary">Informacion del Empleado</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Telefono: </strong> <?php echo $item["telefono"] ?></p>
                                <p><strong>Carnet: </strong> <?php echo $item["carnet"] ?></p>
                                <p><strong>Correo: </strong> <?php echo $item["correo"] ?></p>
                            </div>

                            <div class="col-md-6">
                                <p><strong>Salario: </strong> <?php echo $item["salario"] ?></p>
                                <p><strong>Departamento: </strong> <?php echo $item["departamento"] ?></p>
                                <p><strong>Cargo: </strong> <?php echo $item["cargo"] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            <?php } ?>
        </tbody>
    </table>
    <?php $empleado->desactivar();  ?>
    </div>
    <?php include "./modulos/footer.php"; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>