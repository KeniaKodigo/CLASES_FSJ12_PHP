<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //ejecutar la tabla a la base de datos
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id(); //primary key
            $table->string('nombre', 50); //50 caracteres
            $table->string('apellido', 50);
            $table->text('direccion')->nullable(); //datos nulos
            $table->integer('telefono'); //11 numeros
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //metodo que me sirve para eliminar la migracion de la base de datos
        Schema::dropIfExists('proveedores');
    }
};
