<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;
use Illuminate\Support\Facades\Validator;

class ProveedoresController extends Controller
{
    //metodo para retornas todos los proveedores en json
    public function getProveedores(){
        //select * from proveedores => all()
        $proveedores = Proveedores::all(); //[]

        //validando si la consulta esta vacia o no
        if(count($proveedores) != 0){
            $json = array(
                "status" => 200, //OK
                "total_proveedores" => count($proveedores),
                "detalle" => $proveedores
            );
        }else{
            $json = array(
                "status" => 400, 
                "total_proveedores" => 0,
                "detalle" => "No se encontraron proveedores en la bd"
            );
        }

        //convirtiendo el arreglo en un json
        /**
         * json_encode => cuando se convierte un arreglo en JSON
         * json_decode => cuando se convirte un JSON en arreglo
         */
        return json_encode($json, true);
    }

    //metodo para agregar un proveedor
    public function registrar(Request $request){
        $datos = array(
            "nombre" => $request->input("nombre"),
            "apellido" => $request->input("apellido"),
            "direccion" => $request->input("direccion"),
            "telefono" => $request->input("telefono")
        );

        if(!empty($datos)){
            //si los campos no estan vacios verifico las validaciones
            $validator = Validator::make($datos, [
                'nombre' => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'direccion' => 'required|string|max:255',
            ]);

            //condicionando si las validaciones estan correctas
            if($validator->fails()){
                $errors = $validator->errors();
                $json = array(
                    "status" => 400,
                    "detalle" => $errors
                );
            }else{
                //si las validaciones estan correctas registro al proveedor

                //insert into proveedores (campos) values (valores)
                $proveedores = new Proveedores();
                $proveedores->nombre = $datos['nombre'];
                $proveedores->apellido = $datos['apellido'];
                $proveedores->direccion = $datos['direccion'];
                $proveedores->telefono = $datos['telefono'];
                $proveedores->save();

                $json = array(
                    "status" => 200,
                    "detalle" => "Se ha registrado correctamente el proveedor"
                );
            }
        }else{
            $json = array(
                "status" => 400,
                "detalle" => "Los campos no pueden estar vacios"
            );
        }

        return json_encode($json, true);
    }
}
