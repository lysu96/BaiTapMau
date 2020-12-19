<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTinCongNghe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tin_cong_nghe',function (Blueprint $table)
        {
            $table->integer('id_nv')->unsigned();
            $table->foreign('id_nv')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tin_cong_nghe', function (Blueprint $table) {
            $table->dropColumn(['id_nv']);
        });
    }
}
