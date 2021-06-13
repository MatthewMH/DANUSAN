<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangdanusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('orangdanusan', function (Blueprint $table) {

            $table->id();
            $table->string('email', 255);
            $table->string('username', 255);
            $table->string('kontak', 13);
            $table->string('password', 255);
            $table->string('profil', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orangdanusan');
    }
}
