<?php
/**
 * Enunciado: Crea un sistema para una clinica privada donde se tendra la informacion personal del
 * paciente, de los doctores, enfermeras, se tomara en cuenta las recetas y el tratamiento del paciente
 */

class Paciente{
    public $nombre;
    public $direccion;
    public $edad;
    public $telefono; 
    public $enfermedades;
    public $responsable;

    public function verReceta(){
        //code..
    }

    public function verTratamientos(){
        //code..
    }

    public function verInfoDoctor(){

    }

    public function verPerfil(){

    }
}

class Doctor{
    public $nombre;
    public $direccion;
    public $edad;
    public $telefono;
    public $especializacion;
    public $lugar_trabajo;

    public function verPerfil(){

    }

    public function verPacientes(){

    }

    public function crearRecetas(){

    }

    public function diagnosticar(){

    }

}


?>