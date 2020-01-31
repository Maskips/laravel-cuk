<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemainBolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemain_bolas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('umur');
            $table->date('tgl_lahir');
            $table->string('negara');
            $table->string('klub');
            $table->string('tb');
            $table->string('bb');
            $table->string('posisi');
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
        Schema::dropIfExists('pemain_bolas');
    }
}
