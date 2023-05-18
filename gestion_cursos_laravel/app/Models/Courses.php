<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    //hago referencia a la tabla de mi base de datos
    protected $table = 'courses';

    //indicamos que los campos created_at y update_at que genera laravel no los tiene la tabla courses
    public $timestamps = false;
}
