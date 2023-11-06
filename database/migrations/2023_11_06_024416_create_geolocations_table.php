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
        Schema::create('geolocations', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->string('ciudad');

            $table->unsignedBigInteger('captcha_id')->nullable();
            $table->unsignedBigInteger('location_id')->nullable();

            $table->foreign('captcha_id')
                ->references('id')->on('captchas')
                ->onDelete('set null');

            $table->foreign('location_id')
                ->references('id')->on('locations')
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
        Schema::dropIfExists('geolocations');
    }
};
