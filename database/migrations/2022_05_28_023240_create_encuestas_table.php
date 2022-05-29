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
        Schema::create('encuestas', function (Blueprint $table) {
            $table->id();
            $table->string('emailParticipante')->unique();
            $table->integer('idrangosEdad')->index();
            $table->string('sexo');
            $table->string('redSocialFavorita');
            $table->time('tiempoFacebook');
            $table->time('tiempoWhatsApp');
            $table->time('tiempoTwitter');
            $table->time('tiempoInstagram');
            $table->time('tiempoTiktok');
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
        Schema::dropIfExists('encuestas');
    }
};
