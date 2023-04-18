<?php

#clase de bajo nivel
class FPDF{

    public function imprimirPDF($documento){
        return "El pdf $documento se ha diseñado con la libreria FPDF";
    }
}

class DOMPDF{
    public function imprimirPDF($documento){
        return "El pdf $documento se ha diseñado con la libreria dom pdf que tambien trabaja con laravel";
    }
}

#clase de alto nivel
class GestionInventario{

    public function obtenerEntradas(){
        $pdf = new FPDF(); //instancia directa
        echo $pdf->imprimirPDF("Computadoras");
    }
}

$gestion = new GestionInventario();
$gestion->obtenerEntradas();

/** aplicando el principio de inversion de dependencia */

#creando la abstraccion que va ser el intermediario entre las 2 clases
interface LibreriasPDF{
    public function imprimirPDF($documento);
}

class LibFPDF implements LibreriasPDF{
    public function imprimirPDF($documento){
        return "El pdf $documento se ha diseñado con la libreria FPDF";
    }
}

class LibDomPDF implements LibreriasPDF{
    public function imprimirPDF($documento){
        return "El pdf $documento se ha diseñado con la libreria dom pdf que tambien trabaja con laravel";
    }
}

class LibNewPDF implements LibreriasPDF{
    public function imprimirPDF($documento){
        return "El pdf $documento se ha diseñado con la nueva libreria que salio el año pasado NEWPDF";
    }
}


class Inventario{

    #metodo que recibe los objetos de la interfaz LiberiasPDF
    public function obtenerEntradas(LibreriasPDF $libreria){
        echo $libreria->imprimirPDF("Computadoras");
    }
}
echo "<br>";
$inventario = new Inventario();
$inventario->obtenerEntradas(new LibFPDF);
echo "<br>";
$inventario2 = new Inventario();
$inventario->obtenerEntradas(new LibDomPDF);
echo "<br>";
$inventario3 = new Inventario();
$inventario3->obtenerEntradas(new LibNewPDF);

?>