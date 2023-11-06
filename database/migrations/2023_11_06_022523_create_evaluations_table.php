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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();

            $table->string('question');
            $table->string('recomendacion');
            $table->integer('calificacion');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('violence_id')->nullable();

            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('evaluations');
    }
};
