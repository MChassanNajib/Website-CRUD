<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bongkarans', function (Blueprint $table) {
            $table->id();
            $table->string('muatan_id');
            $table->integer('kode_bongkaran')->unique();
            $table->string('nama_sopir');
            $table->date('tanggalbongkar')->format('d-m-Y');
            $table->string('alamat');
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
        Schema::dropIfExists('bongkarans');
    }
};
