<?php

/**
 * Sistema Educativo: profesores, estudiantes, director
 * 
 * profesores imparten claes, agregan notas, pueden visualizar la informacion de los estudiantes, asignacion tareas
 * estudiantes reciben clases, hacen tareas, pueden ver su nota y su perfil
 * director puede visualizar su informacion, info profesores, info estudiantes
 * Herencia: Es la manera de como podemos reutilizar atributos y metodos de una clase Padre
 * 
 * Polimorfismo: Sobreescribimos metodos para alterar su comportamiento, un metodo puede cambiar de forma en cada clase
 */

#clase Padre
abstract class Usuarios{
    protected $nombre;
    protected $apellido;
    protected $telefono;
    protected $direccion;
    protected $notaFinal;

    #constructor padre
    public function __construct($nombre, $apellido, $telefono, $direccion)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    abstract public function verPerfil();
    abstract public function verNotas();
}

#clases hijas
class Director extends Usuarios{
    public $institucion;
    private $expediente; //get y set 

    /**
     * set() => captura los valores que los guardara en el atributo privado
     * get() => retorna la informacion del atributo privado
     */

    public function __construct($nombre, $apellido, $telefono, $direccion, $institucion)
    {
        #llamando al constructor padre
        parent::__construct($nombre, $apellido, $telefono, $direccion);
        $this->institucion = $institucion;
    }

    public function setExpediente($expediente){
        $this->expediente = $expediente;
    }

    public function getExpediente(){
        return "El director $this->nombre esta viendo el expediente $this->expediente";
    }

    /**
     * sobreescribiendo los metodos de la clase padre
     */
    public function verPerfil()
    {
        return "<h1>Informacion del Director</h1> Nombre Completo: $this->nombre $this->apellido<br> Telefono: $this->telefono<br> Direccion: $this->direccion<br> Institucion: $this->institucion<br>";
    }

    public function verNotas()
    {   
        $this->notaFinal;
        return "El director visualiza las notas de los estudiantes de la seccion A";
    }
}

class Estudiante extends Usuarios{
    private $carnet; //get y set
    public $horario;
    public $materia;
    public $grado;
    public $seccion;

    public function __construct($nombre, $apellido, $telefono, $direccion, $horario, $materia, $grado, $seccion, $nota)
    {
        parent::__construct($nombre, $apellido, $telefono, $direccion);
        $this->horario = $horario;
        $this->materia = $materia;
        $this->grado = $grado;
        $this->seccion = $seccion;
        $this->notaFinal = $nota;
    }

    public function setCarnet($carnet){
        $this->carnet = $carnet;
    }

    public function getCarnet(){
        return "Carnet del Estudiante: " . $this->carnet;
    }

    #sobreescribimos los metodos de la clase padre
    public function verPerfil()
    {
        return "<h1>Informacion del Estudiante</h1> Nombre Completo: $this->nombre $this->apellido<br> Telefono: $this->telefono<br> Direccion: $this->direccion<br> Horario: $this->horario<br> Materia Favorita: $this->materia<br> Grado: $this->grado<br> Seccion: $this->seccion";
    }

    public function verNotas()
    {
        /** verificar si el estudiante paso el grado o no lo paso, nota > 7 */
        if($this->notaFinal > 7){
            echo "Aprobaste el grado :D";
        }else{
            echo "Repobraste el grado :´(";
        }
    }
}

class Profesor extends Usuarios{
    public $institucion;
    private $sueldo;

    public function verPerfil()
    {
        
    }

    public function asignarNotas($nota1, $nota2, $nota3){
        $this->notaFinal = ($nota1 + $nota2 + $nota3) / 3;
    }

    public function verNotas()
    {
        
    }

    public function listaAlumnos(){

    }
}

$director = new Director("Oscar", "Lemus",6578412,"Morazan","Instituto Ricaldone");
echo $director->verPerfil();
$director->setExpediente("Alumno Samuel Hernan");
echo $director->getExpediente();


$estudiante = new Estudiante("Daniel","Hernandez",6578412,"San Salvador","Diurno","Matematica","8°","B",8);
echo $estudiante->verPerfil();
echo "<br>";
$estudiante->verNotas();


?>