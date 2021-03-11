<?php

namespace App\Http\Livewire\Date;

use App\Models\CarData;
use App\Models\Vehicle;
use App\Models\Year;
use App\Models\VehicleInfo;
use Livewire\Component;
use Illuminate\Support\Str;



class FilterOneDay extends Component
{

    public $filtreBtn, $filtreVal, $data;
    public $hours, $time_minutes;
    public $vehicles, $vehicle;
    public $years, $yearId;
    public $days, $dayId;
    public $months, $monthId, $monthHolder;
    public $timesFrom, $timeFromVal, $timesFromHolder;
    public $timesTo, $timeToVal, $timesToHolder;
    public $result;
    public $dayFromId, $daysTo, $dayToId, $dayFromHolder, $dayToHolder;
    public $gates, $gateId, $gateHolder;
    public $directions, $directionId, $directionHolder;
    public $disabled, $hidden;

    public function mount(){
        
        $this->years = Year::all();
         $this->filtreVal = "OneDay";
        $this->filtreSet();
    }

    public function restVar(){

        $this->days = [];
        $this->months = [];
        $this->daysTo = [];
        $this->timesFrom = [];
        $this->timesFrom = [];
        $this->timesTo = [];
        $this->gates = [];
        $this->directions = [];
        
    }
    public function resetFilters(){

        
        // $this->reset('search');
        // // Will only reset the search property.

        // $this->reset(['search', 'isActive']);
        // // Will reset both the search AND the isActive property.

        $this->reset(['days','months','daysTo', 'timesFrom', 'timesFrom', 'timesTo', 'gates', 'directions']);
       
    }




    public function getMonthProperty(){

        $this->monthHolder = "Choose";
        $this->months =  VehicleInfo::Select('month_id')->Where('year_id', $this->yearId)->distinct('month_id')->get();
        
        // $this->resetFilters();
        // $this->result;
        
    }

    public function getDayFromProperty(){

        $this->dayFromHolder = "Choose";
        $this->getMonthProperty();
        $this->days =  VehicleInfo::Select('day_id')->Where('month_id', $this->monthId)->distinct('day_id')->get();
        $this->daysTo = "";
        $this->timesFrom = "";
        $this->timesTo = ""; 
        $this->gates = "";
        $this->directions = "";
        
    }

    
    public function getDayToProperty(){
        
        $this->dayToHolder = "Choose";
        $this->getDayFromProperty();
        $this->daysTo =  VehicleInfo::Select('day_id')
                                    ->Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->Where('day_id' ,'>=', $this->dayFromId)
                                    ->distinct('day_id')->get();
        $this->timesFrom = "";
        $this->timesTo = ""; 
        $this->gates = "";
        $this->directions = "";
        
                                    
    }

    public function getTimeFromProperty(){

        $this->timesFromHolder = "Choose";
        $this->getDayToProperty();
        $this->timesFrom =  VehicleInfo::Select('time')
                                        ->Where('year_id', $this->yearId)
                                        ->Where('month_id', $this->monthId)
                                        ->whereBetween('day_id', [$this->dayFromId, $this->dayToId])
                                        ->distinct('time')
                                        ->get();
        $this->timesTo = ""; 
        $this->gates = "";
        $this->directions = "";

        
    }

    public function getTimeToProperty(){

        $this->timesToHolder = 'Choose';
        $this->getTimeFromProperty();
        $this->timesTo =  VehicleInfo::Select('time')
                                    ->Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->whereBetween('day_id', [$this->dayFromId, $this->dayToId])
                                    ->Where('time' ,'>', $this->timeFromVal)
                                    ->distinct('time')
                                    ->get();
        $this->gates = "";
        $this->directions = "";


        
    }

    public function getGateProperty(){

        $this->gateHolder = 'Choose';
        $this->getTimeToProperty();
        $this->gates =  VehicleInfo::Select('gate_id')
                                    ->Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->whereBetween('day_id', [$this->dayFromId, $this->dayToId])
                                    ->whereBetween('time', [$this->timeFromVal, $this->timeToVal])
                                    ->distinct('gate_id')
                                    ->get();
        $this->directions = "";

        
    }


    public function getDirectionProperty(){

        $this->directionHolder = 'Choose';
        $this->getGateProperty();
        $this->directions =  VehicleInfo::Select('direction_id')
                                    ->Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->whereBetween('day_id', [$this->dayFromId, $this->dayToId])
                                    ->whereBetween('time', [$this->timeFromVal, $this->timeToVal])
                                    ->Where('gate_id', $this->gateId)
                                    ->distinct('direction_id')
                                    ->get();
        
    }

    public function setFilter(){

        $this->getDirectionProperty();
    }
    


    public function getResult(){
        $this->disabled = "disabled";
        $this->hidden = "hidden";
        $this->getDirectionProperty();
        $this->result =  VehicleInfo::Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->whereBetween('day_id', [$this->dayFromId, $this->dayToId])
                                    ->whereBetween('time', [$this->timeFromVal, $this->timeToVal])
                                    ->Where('gate_id', $this->gateId)
                                    ->Where('direction_id', $this->directionId)
                                    ->get();

        
        // $this->resetFilters();
        $this->emit('showData', $this->result);


    }

    public function filtreSet(){
        $this->filtreVal = $this->filtreVal;

        if($this->filtreVal == "OneDay"){
           

            // $carData = CarData::all();

            // $this->years = $carData->pluck('year')->unique();
            // $this->months = $carData->pluck('month')->unique();
            // $this->days = $carData->pluck('day')->unique();
            // $this->hours = $carData->pluck('hour')->unique();
            // $this->time_minutes = $carData->pluck('time_minute')->unique();
            
            

                         

        }

    }


    public function render()
    {
        return view('livewire.date.filter-one-day');
    }
}
