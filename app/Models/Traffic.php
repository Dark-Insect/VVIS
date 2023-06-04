<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    protected $table = 'traffic_violation';
    protected $id = 'id';
    protected $fillable = ['name',
    'address','licensetype','drivers_license_no',
    'datetime','registration_no','type','owneraddress',
    'place','time','date','trafficofficer',
    'official_receipt','make','plate','owner',
    'driver','following_violations','status','amount','mvirno'];
}
/*$table->increments('id');
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
            $table->timestamps();
