<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\InstructoresController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

#hace referencia al index, retornamos la vista template.blade.php
Route::get('/', function () {
    return view('template');
});

/** ruta donde llama el metodo del controlador */
Route::get('/courses', [CoursesController::class, 'index'])->name('getCourses');
/** route() => hace referencia al name de la ruta, url() => hace referencia al primer parametro de la ruta ('/courses') */

#ruta para ver el formulario de registro del curso
Route::get('/form', [CoursesController::class, 'viewForm'])->name('formCourses');

/** peticiones POST,PUT O DELETE => necesitamos permiso en laravel @csfr */
#Ruta para guardar un curso
Route::post('/save', [CoursesController::class, 'store'])->name('saveCourse');

#Ruta para obtener un curso en especifico por su ID
Route::get('/editCourse/{id}', [CoursesController::class, 'edit'])->name('editById');

#Ruta para actualizar un curso en especifico
Route::put('/updateCourse/{id}', [CoursesController::class, 'update'])->name('updateById');

#Ruta para eliminar un curso en la base de datos (eliminamos de forma permanente)
Route::delete('/delete/{id}', [CoursesController::class, 'destroy'])->name('deleteById');


#Ruta para la busqueda de instructores
Route::get('/instructores', [InstructoresController::class, 'index'])->name('getInstructor');

#Ruta para generar el reporte de todos los cursos
Route::get('/reporte_cursos', [PDFController::class, 'getCursos'])->name('reporteCursos');