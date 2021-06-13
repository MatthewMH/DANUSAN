<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('makanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idtoko')->references('id')->on('toko');
            $table->string('namamakanan', 255);
            $table->bigInteger('harga');
            $table->string('gambarmakanan', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makanan');
    }
}

