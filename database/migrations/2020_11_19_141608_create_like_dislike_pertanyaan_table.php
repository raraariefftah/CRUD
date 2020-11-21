<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('profil');
            
            $table->integer('poin');
            // $table->primary(['profil_id', 'pertanyaan_id']);

            // $table->foreign('profil_id')->references('id')->on('profil');
            // $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_pertanyaan');
    }
}
