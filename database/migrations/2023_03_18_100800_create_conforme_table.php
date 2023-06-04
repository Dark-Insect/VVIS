<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConformeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conforme', function (Blueprint $table) {
            $table->increments('id');
            $table->string("owner_driver");
            $table->string("apprehending_officers");
            $table->string("agency_office");
            $table->string("mvturnedover");
            $table->string("destination");
            $table->string("chief");
            $table->time("time");
            $table->date("date");
            $table->string("nameofwitness");
            $table->string("address");
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
        Schema::dropIfExists('conforme');
    }
}
