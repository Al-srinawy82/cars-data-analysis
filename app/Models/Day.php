<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model 
{

    protected $table = 'days';
    public $timestamps = true;
    protected $fillable = array('name');

}