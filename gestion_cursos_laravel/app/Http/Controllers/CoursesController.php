<?php

namespace App\Http\Controllers;
use App\Models\Courses; //namespace App\Models
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{

    //CRUD => index(), store(), update(), destroy()

    //metodo para enlistar todos los cursos
    public function index(){
        //SELECT * FROM table => all() => ORM (consultas mapeadas)
        $cursos = Courses::all(); //select * from courses = []
        
        //view() => retorna una vista
        return view("paginas.courses", ["cursos" => $cursos]);
        //queryBuilder => son consultas que no van dirigidas a los modelos
        //$cursos = DB::table('courses')->select('*')->get();
    }

    //metodo que retorna la vista para registrar un curso
    public function viewForm(){
        //select * from instructor
        $instructor = Instructor::all();
        return view("paginas.registerCourse", ["instructor" => $instructor]);
    }

    public function store(){
        //code.
    }
}
