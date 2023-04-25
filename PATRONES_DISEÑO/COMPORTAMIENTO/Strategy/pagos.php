<?php

class ProcesarPago{
    public function formaPago($tipo){
        if($tipo == "Tarjeta de Credito"){
            //code..
        }else if($tipo == "Deposito"){
            //code..
        }else if($tipo == "Remesa"){
            //code..
        }
    }
}

#pasos a seguir para aplicar el patron strategy

#interfaz strategy
interface StrategyPagos{
    public function procesar();
}

#asignando las hijas del Strategy
class TarjetaCredito implements StrategyPagos{
    public function procesar()
    {
        //code..
        return "El proceso es con tarjeta de credito";
    }
}


class Depositar implements StrategyPagos{
    public function procesar()
    {
        //code..
        return "El proceso es con deposito a una cuenta de ahorro";
    }
}

class Remesa implements StrategyPagos{
    public function procesar()
    {
        //code..
        return "El proceso es un pago de remesa de USA";
    }
}

#clase que recibe las estrategias
class Pagos{
    #atributo privado que va recibir objeto de la interfaz strategy
    private StrategyPagos $pago; //recibe objeto de la interfaz (procesar())

    #metodo donde recibimos las estrategias
    public function setPagos(StrategyPagos $estrategia){ //capturamos el objeto en si de la clase hija
        $this->pago = $estrategia; //atributo pago recibe objeto de la interfaz StrategyPagos
    }

    #metodo para imprimir el comportamiento de la estrategia elegida
    public function getPagos(){//imprimos el comportamiento de la clase hija
        return $this->pago->procesar(); //mandamos el comportamiento de la clase hija de la interfaz Strategy
    }
}

$pago = new Pagos();
$pago->setPagos(new Depositar);
echo $pago->getPagos();

echo "<br>";
$pago2 = new Pagos();
$pago2->setPagos(new Remesa);
echo $pago2->getPagos();

?>