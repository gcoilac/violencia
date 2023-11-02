<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->text('participacion');
            $table->string('name');
            $table->string('apellido');
            $table->date('fecha_nac');
            $table->integer('edad');
            $table->string('estado_civil');
            $table->string('nro_contacto');
            $table->string('natural_de');
            $table->text('domicilio');
            $table->string('email')->unique();
            $table->text('tipo');
            $table->text('declaracion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
