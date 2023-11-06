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

            $table->string('name');
            $table->string('apellido');
            $table->date('fecha_nac');
            $table->integer('edad');
            $table->string('estado_civil');
            $table->string('nro_contacto');
            $table->string('natural_de');
            $table->text('domicilio');
            $table->string('email')->unique();
            $table->text('declaracion');

            $table->unsignedBigInteger('reportable_id');
            $table->string('reportable_type');

            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            $table->unsignedBigInteger('share_id')->nullable();
            $table->unsignedBigInteger('violence_id')->nullable();

            $table->foreign('share_id')
                ->references('id')->on('shares')
                ->onDelete('set null');

            $table->foreign('violence_id')
                ->references('id')->on('violences')
                ->onDelete('set null');

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
