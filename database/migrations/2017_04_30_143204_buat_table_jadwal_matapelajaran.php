<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableJadwalMatapelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_matapelajaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ruang_kelas_id',false,true);
            $table->foreign('ruang_kelas_id')->references('id')->on('ruang_kelas')->onDelete('cascade');
            $table->integer('guru_matapelajaran_id',false,true);
            $table->foreign('guru_matapelajaran_id')->references('id')->on('guru_matapelajaran')->onDelete('cascade');
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
        Schema::drop('jadwal_matapelajaran');
    }
}
