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
        Schema::create('tarea', function (Blueprint $table) {
            $table->id(); // id autoincremental
            $table->string('titulo'); // título de la tarea
            $table->text('descripcion')->nullable(); // descripción opcional
            $table->enum('estado', ['pendiente','en_proceso','finalizada'])->default('pendiente'); // estado de la tarea
            $table->timestamps(); // created_at y updated_at 
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
