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

    /** metodo para registrar un curso */
    public function store(Request $request){
        //INSERT INTO table(campos) VALUES (valores) => save()
        //instancia del modelo
        $curso = new Courses();
        //1.llamando los campos de la table      2.hace referencia al name del formulario
        $curso->title = $request->post('title');
        $curso->description = $request->post('description');
        $curso->price = $request->post('Price');
        $curso->id_instructor = $request->post('instructores');
        $curso->save();

        //redireccionamos al apartado de cursos por el name de la ruta que esta en web.php
        return redirect()->route('getCourses');
    }

    //select * from table where id = ?
    //UPDATE table SET campo = valor WHERE id = ?

    //metodo que extrae la informacion de un curso en especifico y me lo retorna a una vista
    public function edit($id){
        //select * from table where id = ? => find()
        //$curso = Courses::find($id); //select * from courses where id = 1

        //SELECT courses.*, instructor.name AS instructor FROM courses INNER JOIN instructor ON courses.id_instructor = instructor.id WHERE courses.id = 1; //join
        $curso = Courses::join('instructor','courses.id_instructor','=','instructor.id')->select('courses.id as id_course','courses.title','courses.description','courses.price','courses.id_instructor','instructor.name as instructor')->find($id);
        $instructores = Instructor::all(); //select * from instructor

        //print_r($curso);
        return view("paginas.editCourse", ["curso" => $curso, "instructor" => $instructores]);
    }

    //metodo para actualizar un curso
    public function update(Request $request, $id){
        //UPDATE table SET campo = valor WHERE id = ? => update()

        //find() => toma en cuenta un registro en especifico por su id
        $curso = Courses::find($id); //select * from courses where id = ?
        $curso->title = $request->post('title');
        $curso->description = $request->post('description');
        $curso->price = $request->post('Price');
        $curso->id_instructor = $request->post('instructores');
        $curso->update();

        //update courses set title = 'campoFormulario', description = '', price = '', id_instructor = '' where id = ? 

        //redireccionamos al apartado de cursos por el name de la ruta que esta en web.php
        return redirect()->route('getCourses');
    }

    //eliminar un curso por su id

    public function destroy($id){
        //DELETE FROM table => delete()

        //delete from table where id = $id
        //WHERE, INNER JOIN, SELECT
        $curso = Courses::where("id", "=", $id)->delete();
        //redireccionamos al aparatado donde estan todos los cursos
        return redirect()->route('getCourses');
    }
}
