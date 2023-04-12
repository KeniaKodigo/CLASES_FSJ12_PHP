<?php

/**
 * Single Responsability: Una clase debe tener una y solo unica razon para cambiar, una clase debe tener una sola tarea
 */

 #cumpliendo con el principio de la responsabilidad unica
class Doctor{
    public function registrar(){

    }

    public function actualizar(){

    }

    public function crearRecetas(){

    }

    public function verPerfilPaciente(){

    }
}


class Enfermero{
    public function registrar(){
        
    }

    public function agendarCitas(){

    }
}

class Conexion{
    public function conectar(){
        //code..
    }
}

class Roles{
    public function tipoUsuario(){
        
    }
}

?>