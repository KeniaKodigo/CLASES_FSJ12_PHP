<?php

use App\Http\Controllers\CoursesController;
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

Route::get('/form', [CoursesController::class, 'viewForm'])->name('formCourses');
