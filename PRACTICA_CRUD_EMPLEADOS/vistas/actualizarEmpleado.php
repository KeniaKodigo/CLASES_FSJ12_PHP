<?php  require "../clases/Empleado.php";  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Empleado</title>
</head>
<body>
    <?php
        //instanciando la clase de empleados
        $empleado = new Empleado();
        //asignamos una variable para los departamentos de la bd que vamos a iterar
        $departamentos = $empleado->departamentos();
        $cargos = $empleado->cargos();
        $datos = $empleado->getEmpleadoById();
    ?>
    <h1 class="text-center">Actualizacion de Datos</h1>
    <div class="container">
        <form action="" method="POST">
            <?php foreach($datos as $item) { ?>
            <input type="hidden" name="id_empleado" value="<?php echo $item["id"]; ?>">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $item["nombre"]; ?>">

            <label for="">Apellido</label>
            <input type="text" class="form-control" name="apellido" value="<?php echo $item["apellido"]; ?>">

            <label for="">Salario</label>
            <input type="text" class="form-control" name="salario" value="<?php echo $item["salario"]; ?>">

            <label for="">Carnet</label>
            <input type="text" class="form-control" name="carnet" value="<?php echo $item["carnet"]; ?>">

            <label for="">Telefono</label>
            <input type="number" class="form-control" name="telefono" value="<?php echo $item["telefono"]; ?>">

            <label for="">Correo</label>
            <input type="text" class="form-control" name="correo" value="<?php echo $item["correo"]; ?>">

            <label for="">Contraseña</label>
            <input type="text" class="form-control" name="password" value="<?php echo $item["password"]; ?>" required>

            <label for="">Seleccione Departamento</label>
            <select name="departamento" id="" class="form-control">
                <option value="<?php echo $item["id_departamento"]; ?>"><?php echo $item["departamento"]; ?></option>

                <?php foreach($departamentos as $item) { ?>
                    <option value="<?php echo $item["id"];  ?>"><?php echo $item["nombre"];  ?></option>
                <?php } ?>
            </select>

            <label for="">Seleccione Cargo</label>
            <select name="cargo" id="" class="form-control">
                <?php foreach($cargos as $value) { ?>
                    <option value="<?php echo $value["id"]; ?>"><?php echo $value["nombre"]; ?></option>
                <?php } ?>
            </select>

            <input type="submit" class="btn btn-dark mt-4" value="Actualizar">

            <?php } ?>
        </form>
        <?php $empleado->actualizar(); ?>
    </div>
</body>
</html>