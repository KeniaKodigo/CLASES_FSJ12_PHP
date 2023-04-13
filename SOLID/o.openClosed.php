<?php

/**
 * Open Closed: Abierto / Cerrado
 * Las clases deben estar abiertas a extension pero cerradas a modificacion 
 */

class Archivo{

    public function obtenerArchivo($archivo){
        if($archivo == "MP4"){
            //code..
        }else if($archivo == "MP3"){
            //code..
        }else if($archivo == "gif"){
            //code..
        }else if($archivo == "png"){
            //code..
        }else if($archivo == "jpg"){
            //code..
        }else if($archivo == "MP4"){

        }
        else{
            return "Selecciona un tipo de archivo";
        }
    }
}

#Cumpliendo el principio => clases abstractas, interface

interface TipoArchivo{
    public function imprimirArchivo();
}

class Mp4 implements TipoArchivo{

    public function imprimirArchivo()
    {
        return "Se imprimio un archivo mp4";
    }
}

class Mp3 implements TipoArchivo{
    public function imprimirArchivo()
    {
        return "Se imprimio un archivo mp3";
    }
}

class Gif implements TipoArchivo{
    public function imprimirArchivo()
    {
        return "Se imprimio un archivo gif";
    }
}

class SVG implements TipoArchivo{
    public function imprimirArchivo()
    {
        return "Esta obteniendo un Archivo SVG";
    }
}

class PNG implements TipoArchivo{
    public function imprimirArchivo()
    {
        return "Archivo PNG";
    }
}


function archivo(TipoArchivo $document){
    /**
     * $document = interface TipoArchivo {
     *  public function imprimirArchivo();
     * }
     */
    echo $document->imprimirArchivo(); //hacemos llamado del metodo de la interfaz
}


echo archivo(new SVG);
echo "<br>";
echo archivo(new Gif);
echo "<br>";
echo archivo(new Mp4);

/*class Developer{

    public function tareas($developer){
        switch($developer){
            case "frontEnd":
                return "Tarea: Maquetacion";
                break;
            case "backend":
                return "Tarea: Codificacion";
                break;
            case "QA":
                return "Tarea: Testear el codigo";
                break;
            case "FullStack":
                return "Tarea: Maquetar y codificar";
                break;
            default:
                return "Selecciona un tipo de desarrollador";
        }
    }
}

abstract class typeDeveloper{
    abstract public function tareas();
}


class FrontEnd extends typeDeveloper{
    public function tareas()
    {
        return "Tarea: Maquetacion";
    }

    public function diseñoWeb(){

    }
}

class Backend extends typeDeveloper{
    public function tareas()
    {
        return "Tarea: Codificacion";
    }
}

class DataAnality extends typeDeveloper{
    public function tareas()
    {
        return "Tarea: Base de datos";
    }
}*/

?>