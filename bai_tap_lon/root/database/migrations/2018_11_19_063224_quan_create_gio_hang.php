<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuanCreateGioHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    Schema::create('gio_hang',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_sp');
            $table->integer('id_tv');
            $table->integer('soLuong');
            $table->string('mauSac');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gio_hang');
    }
}
