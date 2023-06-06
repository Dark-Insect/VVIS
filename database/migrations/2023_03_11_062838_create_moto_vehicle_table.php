<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotoVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moto_vehicle', function (Blueprint $table) {
            $table->increments('id');
            $table->double('mvirno');
            $table->string("ownerofthevehicle");
            $table->double("telephonenumber");
            $table->string("completeaddress");
            $table->string("completenameofthedriver");
            $table->string("license_number");
            $table->string("dlrno");
            $table->string("mvplateno");
            $table->string("makeofthevehicle");
            $table->string("typeofthebody");
            $table->string("yearmodel");
            $table->string("motono");
            $table->string("chassisnumber");
            $table->string('violations');
            $table->string("place");
            $table->dateTime("datetime");
            $table->string("remarks");
            $table->string("condition");
            $table->string("vehicle");
            $table->string("conformeowner");
            $table->string("witness");
            $table->string("witnessaddress");
            $table->string("apprehending");
            $table->string('agency')->default('Traffic Management Office');
            $table->string("acknowledging");
            $table->string("designation");
            $table->string('chief')->default('Danny Atillo');
            $table->dateTime("chiefdatetime");
            $table->string('status')->default('Pending');
            $table->string('amount')->default('');
            $table->timestamps();
        });
    }

    /**['ownerofthevehicle','telephonenumber',
    'completeaddress','completenameofthedriver',
    'license_number','dlrno','mvplateno','makeofthevehicle',
    'typeofthebody','yearmodel','motono',
    'chassisnumber','violations','place','datetime'
    ,'remarks','condition','vehicle','conformeowner','
    witness','witnessaddress','apprehending','agency'
,'acknowledging','designation','chief','chiefdatetime'];
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moto_vehicle');
    }
}
