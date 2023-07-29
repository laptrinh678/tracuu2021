<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDiemtheomonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemtheomon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_sv');
            $table->integer('id_mon');
            $table->integer('hocky');
            $table->integer('namhoc');
            $table->integer('diemthi');
            $table->integer('diemchuyencan');
            $table->integer('diemhs1');
            $table->integer('diemhs2');
            $table->integer('diemkhac');
            $table->integer('tkmon');
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
        Schema::dropIfExists('diemtheomon');
    }
}
