<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Binhluan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noidung');
            $table->unsignedInteger('id_khach');
            $table->unsignedInteger('id_baiviet');
            $table->integer('states')->default(0);
            $table->foreign('id_baiviet')->references('id')->on('baiviet');
            $table->foreign('id_khach')->references('id')->on('users');
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
        Schema::dropIfExists('binhluan');
    }
}
