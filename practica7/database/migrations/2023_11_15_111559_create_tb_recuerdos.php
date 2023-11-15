<?php
use DB; //USE DE QUERY
use Carbon\Carbon; //manejo de las horas y fechas
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
        Schema::create('tb_recuerdos', function (Blueprint $table) {
            //Definir el ID como incremento
            $table->id();
            //Incluir otros campos
            $table->string('titulo');
            $table->string('recuerdo');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_recuerdos');
    }
};
