<?php
/**
 * Crear un videojuego de 3 niveles 
 * nivel facil => x personaje (fuerza, velocidad)
 * nivel intermedio => otro personaje (fuerza, velocidad)
 * nivel dificil =>  otro personaje (fuerza, velocidad)
 * 
 * personajes: Mario Bross, Finn, Luigi (los objetos a crear)
 */

interface Personaje{
    public function fuerza();
    public function velocidad();
}

class MarioBross implements Personaje{
    public function fuerza()
    {
        return "La fuerza de mario bross es de 150";
    }

    public function velocidad()
    {
        return "La velocidad de mario bross es de 200";
    }
}

class Finn implements Personaje{
    public function fuerza()
    {
        return "La fuerza de finn es de 250";
    }

    public function velocidad()
    {
        return "La velocidad de finn es de 135";
    }
}

class Luigi implements Personaje{
    public function fuerza()
    {
        return "La fuerza de luigi es de 320";
    }

    public function velocidad()
    {
        return "La velocidad de luigi es de 270";
    }
}

#metodo de fabrica: es la super clase
abstract class NivelFabrica{

    /** metodo que va recibir objetos de la interfaz Personaje */
    abstract function obtenerPersonaje() : Personaje; //mario bross, finn, luigi

    /** metodo publico que va imprimir el comportamiento del personaje  */
    public function imprimirHabilidades(){
        /** mandamos a llamar al metodo abstracto para imprimir los metodos que hay en comun con los personajes */
        $personaje = $this->obtenerPersonaje();
        echo $personaje->fuerza();
        echo "<br>";
        echo $personaje->velocidad();
    }
}

#creando las clases hijas para crear un personajes
class NivelFacil extends NivelFabrica{

    public function obtenerPersonaje(): Personaje
    {
        /** instanciamos la clase que queremos crear */
        return new MarioBross();
    }
}

class NivelIntermedio extends NivelFabrica{
    public function obtenerPersonaje(): Personaje
    {
        /** instanciamos la clase que queremos crear */
        return new Finn();
    }
}

class NivelDificil extends NivelFabrica{
    public function obtenerPersonaje(): Personaje
    {
        /** instanciamos la clase que queremos crear */
        return new Luigi();
    }
}

#metodo para devolver objetos del metodo de fabrica
function obtenerNivel(NivelFabrica $fabrica){ //recibe nivelfacil, nivelintermedio, niveldificil
    /**
     * llamamos al metodo publico de la clase abstracta (metodo de fabrica) para saber la fuerza y velocidad
     * del personaje
     */
    return $fabrica->imprimirHabilidades();
}

echo "<h2>Nivel Facil</h2>";
echo obtenerNivel(new NivelFacil);

echo "<h2>Nivel Intermedio</h2>";
echo obtenerNivel(new NivelIntermedio);

echo "<h2>Nivel Dificil</h2>";
echo obtenerNivel(new NivelDificil);

?>