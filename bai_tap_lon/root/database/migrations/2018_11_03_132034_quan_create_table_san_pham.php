<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuanCreateTableSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham',function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('tenSP');
            $table->string('moTa');
            $table->string('thongTinChiTiet');
            $table->float('gia');
            $table->string('mauSac');
            $table->string('baoHanh');
            $table->string('khuyenMai');
            $table->string('anh');
            $table->string('manHinh');
            $table->string('bangTan_Sim');
            $table->string('boNhoTrong');
            $table->string('ram');
            $table->string('cpu');
            $table->string('gpu');
            $table->string('heDieuHanh');
            $table->string('camTruoc');
            $table->string('camSau');
            $table->string('pin');
            $table->integer('id_hsx')->unsigned();
            $table->foreign('id_hsx')->references('id')->on('hang_san_xuat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham');
    }
}
