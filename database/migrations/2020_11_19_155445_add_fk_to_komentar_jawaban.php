<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToKomentarJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            //
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            //
            $table->dropForeign(['jawaban_id']);
            $table->dropColumn(['jawaban_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id']);
        });
    }
}
