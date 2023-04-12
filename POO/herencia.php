<?php


/**
 * Herencia: Es cuando una clase puede reutilizar los atributos y metodos de otra clase
 */

class Persona{
    public $nombre;
    public $direccion;
    public $edad;
    public $telefono; 

    public function __construct($nombre, $direccion, $edad, $telefono){
        $this->nombre = $nombre; //null
        $this->direccion = $direccion;
        $this->edad = $edad;
        $this->telefono = $telefono;
    }

    public function imprimirDatos(){
        return "Datos Personales: <br>Nombre: $this->nombre<br>Direccion: $this->direccion<br>Edad: $this->edad<br>Telefono: $this->telefono";
    }

}

class Paciente2 extends Persona{
    public $enfermedades;
    public $responsable;

    public function __construct($nombre, $direccion, $edad, $telefono, $enfermedad, $responsable)
    {
        //llamando al constructor padre => parent
        parent::__construct($nombre, $direccion, $edad, $telefono);
        $this->enfermedades = $enfermedad;
        $this->responsable = $responsable;
    }

    public function infoPaciente(){
        return "Enfermedad: $this->enfermedades<br>Responsable del paciente: $this->responsable";
    }

    public function verReceta(){
        //code..
    }

    public function verTratamientos(){
        //code..
    }

    public function verInfoDoctor(){

    }

}

class Doctor2 extends Persona{
    public $especializacion;
    public $lugar_trabajo;

    public function __construct($name, $address, $age, $phone, $especializacion, $lugar)
    {
        //llamando al constructor padre => parent
        parent::__construct($name, $address, $age, $phone);
        $this->especializacion = $especializacion;
        $this->lugar_trabajo = $lugar;
    }

    public function infoDoctor(){
        return "Especializacion: $this->especializacion<br>Empresa: $this->lugar_trabajo";
    }

    public function verPacientes(){

    }

    public function crearRecetas(){

    }

    public function diagnosticar(){

    }

}

$persona = new Persona("ghb0","fgh",25,74585);

$paciente = new Paciente2("Julio Roman","San Salbador",25,65874912, "Diavetico","Karla Murcia");
echo $paciente->imprimirDatos();
echo "<br>";
echo $paciente->infoPaciente();

echo "<h1>Info del doctor</h1>";
$doctor = new Doctor2("Keren Chacon","Cabañas",32,7845961,"Psicologia","Hospital Bloom");
echo $doctor->imprimirDatos();
echo "<br>";
echo $doctor->infoDoctor();


?>