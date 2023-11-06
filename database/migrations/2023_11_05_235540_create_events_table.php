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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->date('fecha_init');
            $table->date('fecha_end');
            $table->string('location');
            $table->boolean('vigence');
            $table->text('description');

            $table->unsignedBigInteger('tipo_id')->nullable();

            $table->foreign('tipo_id')
                ->references('id')->on('tipos')
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
        Schema::dropIfExists('events');
    }
};
