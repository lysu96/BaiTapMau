<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuanCreateTableTinCongNghe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_cong_nghe',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('tenTin');
            $table->text('noiDung');
            $table->string('anh');
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
        Schema::dropIfExists('tin_cong_nghe');
    }
}
