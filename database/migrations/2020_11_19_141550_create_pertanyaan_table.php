<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('judul', 45);
            $table->string('isi', 255);
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbaharui');

            // $table->unsignedBigInteger('jawaban_tepat_id');
            // $table->unsignedBigInteger('profil_id');
            
            // $table->foreign('jawaban_id')->references('id')->on('jawaban');
            // $table->foreign('profil_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan');
    }
}
