<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $id = 'id';
    protected $fillable = ['name',
'email','contact','address','code',
'licensetype','licenseno'];
}
/*$table->increments('id');
$table->string('name');
$table->string('username')->unique();
$table->string('email');
$table->double('contact');
$table->string('address');
$table->double('code');
$table->string('licensetype');
$table->string('licenseno');
