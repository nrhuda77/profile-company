<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataPelamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pribadi_pelamar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelamar');
            $table->string('nama');
            $table->string('tgl_lahir');
            $table->string('tempat_lahir');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('no_telp');
            $table->string('email');
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
        Schema::dropIfExists('data_pribadi_pelamar');
    }
}
