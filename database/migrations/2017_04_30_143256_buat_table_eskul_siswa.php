<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableEskulSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eskul_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenis_id',false,true);
            $table->foreign('jenis_id')->references('id')->on('jenis_ekskul')->onDelete('cascade');
            $table->integer('siswa_id',false,true);
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
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
        Schema::drop('eskul_siswa');
    }
}
