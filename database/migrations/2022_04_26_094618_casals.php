<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Casals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->unsignedBigInteger('id_ciutat')->nullable();
            $table->date('data_inici');
            $table->date('data_final');
            $table->integer('n_places');
            $table->timestamps();

            $table->foreign('id_ciutat')->references('id')->on('ciutats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casals');
    }
}
