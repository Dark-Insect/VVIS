<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    protected $table = 'drivers_information';
    protected $id = 'id';
    protected $fillable = ['name',
    'address','zipcode','homephone',
    'birthday','drivers_license','drivers_state','injury_type','mvirno'];
}

            /*$table->id();
            $table->string("name");
            $table->string("address");
            $table->double("zipcode");
            $table->double("homephone");
            $table->date("birthday");
            $atble->string("drivers_license");
            $table->string("drivers_state");
            $table->string("injury_type");
