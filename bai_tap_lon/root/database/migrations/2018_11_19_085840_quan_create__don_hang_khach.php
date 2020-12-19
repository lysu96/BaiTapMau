<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuanCreateDonHangKhach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_hang_khach',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('hoTen');
            $table->string('sdt');
            $table->string('email');
            $table->string('diacChi');
            $table->integer('id_sp')->unsigned();
            $table->integer('soLuong')->unsigned();
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
        Schema::dropIfExists('don_hang_khach');
    }
}
