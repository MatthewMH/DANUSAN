<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idmakanan')->references('id')->on('makanan');
            $table->foreignId('idorang')->references('id')->on('orangdanusan');
            $table->foreignId('idtoko')->references('id')->on('toko');
            $table->date('tanggaltransaksi', "d-m-Y");
            $table->date('tanggalpengambilan', "d-m-Y");
            $table->bigInteger('jumlah');
            $table->bigInteger('totalharga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}

