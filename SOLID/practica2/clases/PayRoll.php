<?php

abstract class Payroll{
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

    abstract function ObtenerSalarioBruto();

    abstract function ObtenerISSS();

    abstract function ObtenerAFP();

    abstract function ObtenerSalarioNeto();

    abstract function imprimirInfo();

}

?>