<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicle_information';
    protected $id = 'id';
    protected $fillable = ['tagdate',
    'tagstate','make','model',
    'year','insurance_company','policy_number'];
}

/*$table->id();
$table->date("tagdate");
$table->string("tagstate");
$table->string("make");
$table->string("model");
$table->integer("year");
$table->string("insurance_company");
$table->integer("policy_number");