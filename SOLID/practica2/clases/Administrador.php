<?php
require "PayRoll.php";

class Administrador extends Payroll{

    public function ObtenerSalarioBruto()
    {
        $this->sueldobruto = 15 * $this->hora;
    }

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