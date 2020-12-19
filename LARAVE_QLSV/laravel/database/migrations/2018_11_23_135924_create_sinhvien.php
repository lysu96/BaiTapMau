<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinhvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('sinhvien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maSV');
            $table->string('tenSV');
            $table->timestamp('maLop')->nullable();
            $table->foreign('maLop')->references('id')->on('lop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down();
    {
       Schema::drop('sinhvien');
    }
}
