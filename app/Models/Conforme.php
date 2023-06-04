<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conforme extends Model
{
    protected $table = 'conforme';
    protected $id = 'id';
    protected $fillable = ['owner_driver','apprehending_officers',
'agency_office','mvturnedover','destination',
'chief','time','date','nameofwitness','address'];
}

/*$table->string("owner_driver");
$table->string("apprehending_officers");
$table->string("agency_office");
$table->string("mvturnedover");
$table->string("destination");
$table->string("chief");
$table->string("time");
$table->string("date");
$table->string("nameofwitness");
$table->string("address");
