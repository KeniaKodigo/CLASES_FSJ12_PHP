<?php

require "Conexion.php";

class Autenticar extends Conexion{
    protected $correo;
    protected $password;

    public function iniciarSesion(){
        if(isset($_POST['correo'], $_POST['password'])){
            $this->correo = $_POST['correo'];
            $this->password = $_POST['password'];

            $this->conectar();
            $query = "SELECT correo, password, nombre, id FROM empleado WHERE correo = '$this->correo' AND password = '$this->password' AND id_estado = 1";
            $result = mysqli_query($this->conexion, $query);
            /**
             * mysqli_num_rows: cuenta si la consulta lleva filas o no (lleva registros)
             */
            $contador_filas = mysqli_num_rows($result); //1, 0,
            /**
             * mysqli_fetch_assoc: asociame los registros en un arreglo
             */
            $usuario = mysqli_fetch_assoc($result);
            if($contador_filas > 0){
                //guardar el nombre de la persona que inicio sesion
                $_SESSION['nombre_usuario'] = $usuario['nombre'];
                echo $_SESSION['nombre_usuario'];
                //redirecciona a la pagina de bienvenida
                header("location: ./vistas/bienvenida.php");
            }else{
                echo "<div class='alert alert-danger' role='alert'>
                    Correo y Contraseña incorrectas
                </div>";
            }
            /**
             * $_POST[]
             * 
             * $_SESSION['rol'] = id_rol; //1 = gerente, 2 = conserge
             */
        }
    }
}

?>