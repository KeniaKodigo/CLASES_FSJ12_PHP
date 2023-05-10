<?php

require "Conexion.php";

class Empleado extends Conexion{
    protected $id;
    protected $nombre;
    protected $apellido;
    protected $carnet;
    protected $salario;
    protected $telefono;
    protected $correo;
    protected $password;
    protected $id_departamento;
    protected $id_cargo;
    protected $id_rol;
    protected $id_estado;

    /** CRUD de empleados */
    //metodo para obtener todos los departamentos
    public function departamentos(){
        $this->conectar();
        $query = "SELECT * FROM departamento";
        //ejecutando la consulta => mysqli_query()
        $resultado = mysqli_query($this->conexion, $query);
        return $resultado;
    }

    public function cargos(){
        $this->conectar();
        $query = "SELECT * FROM cargo";
        //ejecutando la consulta => mysqli_query()
        $resultado3 = mysqli_query($this->conexion, $query);
        return $resultado3;
    }

    public function roles(){
        $this->conectar();
        $query = "SELECT * FROM rol";
        //ejecutando la consulta => mysqli_query()
        $resultado2 = mysqli_query($this->conexion, $query);
        return $resultado2;
    }

    //metodo para registrar el empleado utilizando el formulario de html
    public function insertar(){
        //isset() => verifica si los campos del formulario no estan vacios
        if(isset($_POST['nombre'], $_POST['apellido'], $_POST['salario'], $_POST['carnet'], $_POST['telefono'], $_POST['correo'], $_POST['password'], $_POST['departamento'], $_POST['cargo'])){

            //asignando a las propiedades los campos del formulario
            $this->nombre = $_POST['nombre'];
            $this->apellido = $_POST['apellido'];
            $this->salario = $_POST['salario'];
            $this->carnet = $_POST['carnet'];
            $this->telefono = $_POST['telefono'];
            $this->correo = $_POST['correo'];
            $this->password = $_POST['password'];
            $this->id_departamento = $_POST['departamento'];
            $this->id_cargo = $_POST['cargo'];
            $this->id_rol = 1;
            $this->id_estado = 1; //empleado activo

            //consulta para insertar en la base de datos
            $query = "INSERT INTO empleado(nombre, apellido, salario, carnet, telefono, correo, password, id_departamento, id_cargo,id_rol, id_estado) VALUES ('$this->nombre', '$this->apellido', $this->salario, '$this->carnet', $this->telefono, '$this->correo', '$this->password', $this->id_departamento, $this->id_cargo, $this->id_rol, $this->id_estado)";

            $result = mysqli_query($this->conexion, $query);
            //validando que se haya guardado el registro y retorne a otra vista

            //empty => verifica si algo esta vacio o no
            if(!empty($result)){
                //redireccionando al index
                header("location: index.php");
            }else{
                echo "Error al registrar el empleado";
            }
        }
    }

    //obteniendo todos los empleados
    public function getEmpleados(){
        $this->conectar();
        $query = "SELECT empleado.*, departamento.nombre AS departamento, cargo.nombre AS cargo  FROM empleado INNER JOIN departamento ON empleado.id_departamento = departamento.id INNER JOIN cargo ON empleado.id_cargo = cargo.id WHERE empleado.id_estado = 1";
        $result = mysqli_query($this->conexion, $query);
        return $result;
    }

    //obteniendo un empleado en base a su id
    public function getEmpleadoById(){
        if(isset($_POST['id_empleado'])){
            $this->id = $_POST['id_empleado'];
            $this->conectar();
            $query = "SELECT empleado.*, departamento.nombre AS departamento, cargo.nombre AS cargos  FROM empleado INNER JOIN departamento ON empleado.id_departamento = departamento.id INNER JOIN cargo ON empleado.id_cargo = cargo.id WHERE empleado.id = $this->id";
            $result = mysqli_query($this->conexion, $query);
            return $result; //[]
        }
        
    }

    //actualizando el empleado
    public function actualizar(){
        if(isset($_POST['nombre'], $_POST['apellido'], $_POST['salario'], $_POST['carnet'], $_POST['telefono'], $_POST['correo'], $_POST['password'], $_POST['departamento'], $_POST['cargo'], $_POST['id_empleado'])){

            //asignando a las propiedades los campos del formulario
            $this->nombre = $_POST['nombre'];
            $this->apellido = $_POST['apellido'];
            $this->salario = $_POST['salario'];
            $this->carnet = $_POST['carnet'];
            $this->telefono = $_POST['telefono'];
            $this->correo = $_POST['correo'];
            $this->password = $_POST['password'];
            $this->id_departamento = $_POST['departamento'];
            $this->id_cargo = $_POST['cargo'];
            $this->id = $_POST['id_empleado'];

            //consulta para actualizar un empleado por su id
            $query = "UPDATE empleado SET nombre = '$this->nombre', apellido = '$this->apellido', salario = $this->salario, carnet = '$this->carnet', telefono = $this->telefono, correo = '$this->correo', password = '$this->password', id_departamento = $this->id_departamento, id_cargo = $this->id_cargo WHERE id = $this->id";

            $result = mysqli_query($this->conexion, $query);
            //validando que se haya guardado el registro y retorne a otra vista

            //empty => verifica si algo esta vacio o no
            if(!empty($result)){
                //redireccionando al index
                header("location: empleados.php");
            }else{
                echo "Error al actualizar el empleado";
            }
        }
    }

    //actualizando el estado del empleado en inactivo
    public function desactivar(){
        if(isset($_POST['id_empleado'])){
            $this->id = $_POST['id_empleado']; //6
            $this->id_estado = 2; //empleado inactivo
            $this->conectar();
            $query = "UPDATE empleado SET id_estado = $this->id_estado WHERE id = $this->id";
            $result = mysqli_query($this->conexion, $query);
            if(!empty($result)){
                echo "";
            }else{
                echo "No se pudo desactivar el empleado";
            }
        }
    }
}


?>