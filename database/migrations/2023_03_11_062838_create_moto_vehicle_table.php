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
            $table->double("license_number");
            $table->double("dlrno");
            $table->double("mvplateno");
            $table->string("makeofthevehicle");
            $table->string("typeofthebody");
            $table->double("yearmodel");
            $table->double("motono");
            $table->double("chassisnumber");
             $table->enum('violations',
         ['Defective Muffler/No Muffler',
         'No Headlight', 'No Tail Light',
        'No Signal Light','No Plate Attached',
    'No Brake Light','Unlicense Driver/Expired DLI',
'Unregistred MV','Deliquent CR/OR']);
            $table->string("place");
            $table->dateTime("datetime");
            $table->string("remarks");
            $table->string("condition");
            $table->string("vehicle");
            $table->string("conformeowner");
            $table->string("witness");
            $table->string("witnessaddress");
            $table->string("apprehending");
            $table->string("agency");
            $table->string("acknowledging");
            $table->string("designation");
            $table->string("chief");
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
