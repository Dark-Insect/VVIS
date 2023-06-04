<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string("report_identifier");
            $table->date("report_date");
            $table->time("report_time");
            $table->string("state");
            $table->string("city");
            $table->string("report_type");
            $table->string("address");
            $table->string("vehicle_logo");
            $table->string("injury_type");
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
        Schema::dropIfExists('owner_details');
    }
}
