<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_motor', function (Blueprint $table) {
            $table->id();
            $table->integer("kendaraan_id");
            $table->string("mesin");
            $table->string("tipe_suspensi");
            $table->string("tipe_transmisi");
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
        Schema::dropIfExists('tb_motor');
    }
}
