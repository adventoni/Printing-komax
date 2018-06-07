<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBucompsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bucomps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_bucomp');
            $table->string('bucomp_name');
            $table->string('city');
            $table->string('address');
            $table->integer('buyer_id')->unsigned();
            $table->timestamps();

            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bucomps');
    }
}
