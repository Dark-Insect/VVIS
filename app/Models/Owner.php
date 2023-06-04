<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owner_details';
    protected $id = 'id';
    protected $fillable = ['report_identifier',
    'report_date','report_time','state',
    'city','report_type','address','vehicle_logo','injury_type'];
}

/*$table->string("report_identifier");
$table->date("report_date");
$table->time("report_time");
$table->string("state");
$table->string("city");
$table->string("report_type");
$table->string("address");
$table->string("vehicle_logo");
$table->string("injury_type");