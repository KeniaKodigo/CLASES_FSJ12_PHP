<?php

/**
 * busqueda de productos y nos conectamos a la base de datos
 */

class ConexionMYSQL{
    public function buscarProducto($producto){
        return "El producto $producto se encuentra en la bd de MYSQL";
    }
}

class ConexionSQL{
    public function buscarProducto($producto){
        return "El producto $producto se encuentra en la bd de SQL SERVER";
    }
}

class GestionProductos{
    public function gestionarPago(){
        $mysql = new ConexionMYSQL();
        echo $mysql->buscarProducto("Aceite Mazola");
    }
}

$producto = new GestionProductos();
$producto->gestionarPago();


#abstraccion
abstract class TipoConexion{
    abstract function buscarProducto($producto);
}

class MYSQL extends TipoConexion{

    public function buscarProducto($producto)
    {
        return "El producto $producto que estas buscando esta en MYSQL";
    }
}

class SQL extends TipoConexion{
    public function buscarProducto($producto)
    {
        return "El producto $producto que estas buscando esta en SQL";
    }
}

class MongoDB extends TipoConexion{
    public function buscarProducto($producto)
    {
        return "El producto $producto que estas buscando esta en MongoDB";
    }
}

class Oracle extends TipoConexion{
    public function buscarProducto($producto)
    {
        return "El producto $producto que estas buscando esta en Oracle";
    }
}

class GestionProduct{
    /**
     * este metodo recibe objeto de la clase abstracta TipoConexion, por lo tanto tiene acceso
     * a todas las clases que heredan esa clase abstracta (MYSQL, SQL, MongoDB)
     */
    public function gestionarPago($producto, TipoConexion $conexion){
        return $conexion->buscarProducto($producto);
    }
}
echo "<br>";
$conexion1 = new GestionProduct();
echo $conexion1->gestionarPago("azucar morena", new MYSQL);
echo "<br>";
$conexion2 = new GestionProduct();
echo $conexion2->gestionarPago("salsa picante", new SQL);
echo "<br>";
$conexion3 = new GestionProduct();
echo $conexion3->gestionarPago("soda pepsi", new Oracle);

?>