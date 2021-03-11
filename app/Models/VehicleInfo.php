<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleInfo extends Model 
{

    protected $table = 'vehicle_info';
    public $timestamps = true;
    protected $fillable = array('vehicle_id', 'gate_id', 'direction_id', 'year_id', 'month_id', 'day_id', 'hour', 'time', 'total_count', 'minute_count');

    public function vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle');
    }

    public function day()
    {
        return $this->belongsTo('App\Models\Day');
    }

    public function direction()
    {
        return $this->belongsTo('App\Models\Direction');
    }

    public function month()
    {
        return $this->belongsTo('App\Models\Month');
    }

    public function year()
    {
        return $this->belongsTo('App\Models\Year');
    }

    public function gate()
    {
        return $this->belongsTo('App\Models\Gate');
    }

}