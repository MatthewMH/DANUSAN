<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('toko', function (Blueprint $table) {
            $table->id();
            $table->string('namatoko', 255);
            $table->string('kontaktoko', 13);
            $table->foreignId('idalamat')->references('id')->on('alamat');
            $table->string('gambartoko', 255)->nullable();
            $table->foreignId('idadmin')->references('id')->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toko');
    }
}
