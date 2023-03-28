<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Nombre Completo</label>
        <input type="text" name="nombre" placeholder="Ingresa tu nombre"><br>
        <label for="">Edad</label>
        <input type="number" name="edad" placeholder="Ingresa tu edad"><br>
        <label for="">Grado</label>
        <input type="text" name="grado" placeholder="Ingresa tu grado"><br>

        <input type="submit" value="Enviar Datos">
    </form>
</body>
<?php
    /**
     * document.getElementByid(")
     */
    class Alumno{
        /** 3 atributos */
        public $nombre;
        public $edad;
        public $grado;

        /**
         * metodo que me permite inicializar mi objeto al momento de llamar a la clase
         */
        public function __construct($nombre, $edad, $grado)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->grado = $grado;
        }

        public function capturarDatos($nombre, $edad, $grado){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->grado = $grado;
        }

        public function imprimirDatos(){
            echo "<b>Datos Estudiantiles:</b> $this->nombre $this->edad $this->grado";
        }
    }

    #Instanciado la clase
    /**
     * variables magicas: $_POST, $_GET, $_FILE, $_SERVER
     * 
     * isset() => comprueba si los inputs estan vacios o tienen datos (trabaja de manera global)
     * empty() => comprueba si los inputs estan vacios (trabaja de manera local, dentro del archivo)
     */
    if(isset($_POST["nombre"], $_POST["edad"], $_POST["grado"])){
        $estudiante = new Alumno($_POST["nombre"], $_POST["edad"], $_POST["grado"]);
        $estudiante->imprimirDatos();
    }
    
?>
</html>