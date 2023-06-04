<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafficViolationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_violation', function (Blueprint $table) {
            $table->increments('id');
            $table->double('mvirno');
            $table->string("name");
            $table->string("address");
            $table->string("licensetype");
            $table->double("drivers_license_no");
            $table->datetime("datetime");
            $table->string("registration_no");
            $table->string("official_receipt");
            $table->string("type");
            $table->string("make");
            $table->string("plate");
            $table->string("owner");
            $table->string("owneraddress");
            $table->string("following_violations");
            $table->string("place");
            $table->string("time");
            $table->string("date");
            $table->string("trafficofficer");
            $table->string("driver");
            $table->string('status')->default('Pending');
            $table->string('amount')->default('');
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
        Schema::dropIfExists('traffic_violation');
    }
}
