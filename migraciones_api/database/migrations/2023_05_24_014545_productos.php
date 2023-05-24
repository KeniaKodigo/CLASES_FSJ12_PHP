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
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); //primary key
            $table->string('nombre', 50); //50 caracteres
            $table->text('descripcion');
            $table->double('precio');
            $table->integer('cantidad'); //11 numeros
            $table->unsignedBigInteger('id_proveedor');
            //haciendo referencia a la tabla proveedores
            $table->foreign('id_proveedor')->references('id')->on('proveedores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
