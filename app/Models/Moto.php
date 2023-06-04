<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $table = 'moto_vehicle';
    protected $id = 'id';
    protected $fillable = ['ownerofthevehicle','telephonenumber',
    'completeaddress','completenameofthedriver',
    'license_number','dlrno','mvplateno','makeofthevehicle',
    'typeofthebody','yearmodel','motono',
    'chassisnumber','violations','place','datetime'
    ,'remarks','condition','vehicle','conformeowner',
    'witness','witnessaddress','apprehending','agency'
,'acknowledging','designation','chief','chiefdatetime','status','amount','mvirno'];
}
/*$table->id();
$table->string("ownerofthevehicle");
$table->string("completeaddress");
$table->double("telephonenumber");
$table->string("completenameofthedriver");
$table->double("license_number");
$table->double("dlrno");
$table->double("mvplateno");
$table->string("makeofthevehicle");
$table->string("typeofthebody");
$table->double("yearmodel");
$table->double("motono");
$table->double("chassisnumber");
