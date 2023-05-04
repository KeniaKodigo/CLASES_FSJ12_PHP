<?php

/** clase para conectarnos a la base de datos */
class Conexion{
    protected $conexion;

    public function conectar(){
        //MYSQLI PDO
        /** te pide 4 parametros: servidor, usuario, password, nombre de la base de datos */
        $this->conexion = mysqli_connect("localhost", "root", "", "crud_empleados");
    }
}

?>