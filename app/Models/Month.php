<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Month extends Model 
{

    protected $table = 'months';
    public $timestamps = true;
    protected $fillable = array('name');

}