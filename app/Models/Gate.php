<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gate extends Model 
{

    protected $table = 'gates';
    public $timestamps = true;
    protected $fillable = array('name');

}