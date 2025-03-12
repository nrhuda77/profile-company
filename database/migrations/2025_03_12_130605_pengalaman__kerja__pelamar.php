<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PengalamanKerjaPelamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman_kerja_pelamar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelamar');
            $table->string('perusahaan');
            $table->string('posisi');
            $table->string('awal_masuk');
            $table->string('keluar');
            $table->text('desk');
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
        Schema::dropIfExists('pengalaman_kerja_pelamar');
    }
}
