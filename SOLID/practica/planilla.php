<?php
/**
 * Crear una planilla, donde el empleado pueda ingresar cuantas horas ha trabajado, cuanto es por hora y en base al resultado sacar el ISSS, AFP y el sueldo total del empleado
 */
class Planilla{
    #asignacion de atributos
    protected $nombre;
    protected $tarifa_hora;
    protected $horas;
    protected $isss; //0.062
    protected $afp; //0.13
    protected $sueldobruto; //tarifa * horas
    protected $sueldoneto; 
    #asignacion de metodos

    /** metodo para inicializar el objeto */
    public function __construct($nombre, $tarifa, $hora)
    {
        $this->nombre = $nombre;
        $this->tarifa_hora = $tarifa;
        $this->horas = $hora;
    }

    #metodo para calcular el sueldo bruto
    public function obtenerSueldoBruto(){
        return $this->sueldobruto = $this->tarifa_hora * $this->horas;
    }

    #metodo para sacer el ISSS
    public function obtenerISSS(){
        return $this->isss = $this->sueldobruto * 0.062;
    }

    #metodo para sacer el AFP
    public function obtenerAFP(){
        return $this->afp = $this->sueldobruto * 0.13;
    }

    //600, isss = 37.20, afp = 78 = 
    #metodo para obtener el sueldo neto del empleado
    public function obtenerSalarioNeto(){
        return $this->sueldoneto = $this->sueldobruto - ($this->isss + $this->afp);
    }


    public function imprimirInfo(){
        return "<b>Empleado: </b> $this->nombre<br>" . "<b>Sueldo Bruto: </b> $" . number_format($this->sueldobruto, 2) . "<br><b>Seguro Social: </b> $" . number_format($this->isss, 2) . "<br><b>AFP: </b> $" . number_format($this->afp, 2) . "<br><b>Sueldo Neto: </b> $" . number_format($this->sueldoneto, 2);
    }
}


?>