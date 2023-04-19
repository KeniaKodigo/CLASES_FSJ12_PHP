<?php

class PayRoll{
    #atributos
    protected $nombre;
    protected $tipo_empleado;
    protected $isss; //0.062
    protected $afp; //0.13
    protected $sueldobruto; //tarifa * horas
    protected $sueldoneto;
    protected $hora; 

    public function __construct($nombre, $tipo, $hora)
    {
        $this->nombre = $nombre;
        $this->tipo_empleado = $tipo; //administrador, vendedor, cajero, conserge
        $this->hora = $hora;
    }

    /**administrador = $15
        vendedor = $5
        cajera = $7.50
        conserge = $4.50 */

    #metodo que esta incumpliendo el OPEN CLOSED
    public function obtenerSueldoBruto(){
        switch($this->tipo_empleado){
            case "administrador":
                $this->sueldobruto = 15 * $this->hora;
                break;
            
            case "vendedor":
                $this->sueldobruto = 5 * $this->hora;
                break;
            
            case "cajero":
                $this->sueldobruto = 7.50 * $this->hora;
                break;
            
            case "conserge":
                $this->sueldobruto = 4.50 * $this->hora;
                break;
            default:
                return "Elige un tipo de empleado";
        }
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
        return "<b>Empleado: </b> $this->nombre<br>" . "<b>Tipo de Empleado: </b> " . $this->tipo_empleado
        . "<br><b>Sueldo Bruto: </b> $" . number_format($this->sueldobruto, 2) . "<br><b>Seguro Social: </b> $" . number_format($this->isss, 2) . "<br><b>AFP: </b> $" . number_format($this->afp, 2) . "<br><b>Sueldo Neto: </b> $" . number_format($this->sueldoneto, 2);
    }
}

?>