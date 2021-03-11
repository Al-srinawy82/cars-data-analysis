<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model 
{

    protected $table = 'vehicles';
    public $timestamps = true;
    protected $fillable = array('type');

}