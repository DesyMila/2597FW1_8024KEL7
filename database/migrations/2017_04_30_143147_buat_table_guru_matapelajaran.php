<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableGuruMatapelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru_matapelajaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id',false,true);
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('cascade');
            $table->integer('mata_pelajaran_id',false,true);
            $table->foreign('mata_pelajaran_id')->references('id')->on('mata_pelajaran')->onDelete('cascade');
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
        Schema::drop('guru_matapelajaran');
    }
}
