<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructoresController extends Controller
{
    //SELECT * FROM instructor WHERE name LIKE '%$buscar%';
    public function index(Request $request){

        /** trim() => elimina espacio a los lados de una cadena */
        $buscar = trim($request->post('buscar')); //input
        //select * from instructor => all()
        //$instructores = Instructor::all();
        $instructores = Instructor::select('name','email')->where('name', 'LIKE', '%'.$buscar .'%')->get(); //0
        //return view("paginas.instructor", ['instructores' => $instructor])
        return view("paginas.instructor", compact('instructores', 'buscar'));
    }
}
