<?php
/**
 * 
 */


#acceso public, protected, private

class Cuenta_Bancaria{
    //saldo, propietario, numero_cuenta, correo
    private $saldo; //get: retorna la informacion del atributo privado y set: captura la informacion del metodo privado
    protected $nombre;
    protected $numero_cuenta;
    public $correo;

    /** este constructor hace tal cosa */
    public function __construct($nombre, $numeroCuenta, $correo){
        $this->nombre = $nombre;
        $this->numero_cuenta = $numeroCuenta;
        $this->correo = $correo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }


    public function getSaldo(){
        return "$this->nombre, su saldo es " . $this->saldo;
    }

    public function imprimirDatos(){
        return "Nombre del propietario: " . $this->nombre . "\nNumero de Cuenta: " . $this->numero_cuenta . "\nCorreo Electronico: " . $this->correo;
    }

    public function depositar($valor){
        //code..
    }
}


class Comprobante extends Cuenta_Bancaria{

    public function imprimirComprobante(){
        return "El comprobante es para $this->nombre";
    }

    //mala practica => refactorizar
    public function depositar($valor)
    {
        throw new Error("La clase comprobante no puede depositar");
    }

}

$cuenta = new Cuenta_Bancaria("Ivan Hernandez",257891456, "ivan@hotmail.com");
$cuenta->correo = "maria@yahoo.com";
echo $cuenta->imprimirDatos();
$cuenta->setSaldo(500);
echo "<br>";
echo $cuenta->getSaldo();

?>