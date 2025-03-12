<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pendidikan_pelamar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelamar');
            $table->string('pendidikan');
            $table->string('gelar');
            $table->string('awal_masuk');
            $table->string('lulus');
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
        Schema::dropIfExists('Pendidikan');
    }
}
