<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToKomentarPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_pertanyaan', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('pertanyaan_id');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_pertanyaan', function (Blueprint $table) {
            //
            $table->dropForeign(['pertanyaan_id']);
            $table->dropColumn(['pertanyaan_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id']);
        });
    }
}
