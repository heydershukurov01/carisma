<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Spins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('who_id')->unsigned();
            $table->integer('whom_id')->unsigned();
            $table->foreign('who_id')->references('id')->on('users');
            $table->foreign('whom_id')->references('id')->on('users');
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
        Schema::dropIfExists('spins');
    }
}
