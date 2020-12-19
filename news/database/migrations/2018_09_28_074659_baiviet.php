<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Baiviet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieude');
            $table->text('noidung');
            $table->text('mota');
            $table->string('anh');
            $table->integer('noibat')->default(0);
            $table->integer('states')->default(0);
            $table->unsignedInteger('id_danhmuc');
            $table->unsignedInteger('id_khach');
            $table->foreign('id_danhmuc')->references('id')->on('danhmuc')->onDelete('cascade');
            $table->foreign('id_khach')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('baiviet');
    }
}
