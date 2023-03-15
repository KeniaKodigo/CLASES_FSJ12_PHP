<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php"; ?>

    <!--
        creando un formmulario para capturar desde PHP
     -->
    <h2>Formulario</h2>
    <form action="" method="GET">
        <label for="">Nombre Completo</label>
        <input type="text" name="nombre" placeholder="Ingresa tu nombre"><br>
        <input type="text" name="telefono" placeholder="Ingresa tu telefono"><br>
        <input type="submit" value="Enviar Datos">
    </form>

    <?php
        /**
         * $_POST[] => encargado de capturar los valores de un input mediante su name
         * $_GET[] => encargado de capturar los valores de un input mediante su name y los muestra en la URL
         * isset() => se encarga de visualizar si un input esta vacio o no
         */

         if(isset($_GET["nombre"], $_GET['telefono'])){
            $nombreCompleto = $_GET["nombre"];
            $telefono = $_GET['telefono'];
            echo "Tu nombre es $nombreCompleto y tu telefono es $telefono";
         }
       
    ?>

    <?php include "footer.php"; ?>
</body>
</html>