<?php

namespace App\Http\Livewire\Gate;

use App\Models\CarData;
use App\Models\Vehicle;
use App\Models\Year;
use App\Models\VehicleInfo;
use Livewire\Component;
use Illuminate\Support\Str;

class FilterOneDay extends Component
{
    
    public $filtreBtn;
    public $filtreVal;
    public $data;
    public $years,$months, $days, $hours, $time_minutes;
    public $vehicles ;
    public $vehicle;
    public $yearId;
    public $dayId;
    public $monthId;
    public $timesFrom;
    public $timeFromVal;
    public $timesTo;
    public $timeToVal;
    public $timesToHolder;
    public $result;
    public $dayFromId, $daysTo, $dayToId, $gates, $gateId, $directions, $directionId;
    
    public function mount(){
        
        $this->years = Year::all();
         $this->filtreVal = "OneDay";
        $this->filtreSet();
    }




    public function getMonthProperty(){

      
        $this->months =  VehicleInfo::Select('month_id')->Where('year_id', $this->yearId)->distinct('month_id')->get();
        
        
    }

    public function getDayFromProperty(){
        
        $this->getMonthProperty();
        $this->days =  VehicleInfo::Select('day_id')->Where('month_id', $this->monthId)->distinct('day_id')->get();
        
    }

    
    public function getDayToProperty(){
        
        $this->getDayFromProperty();
        $this->daysTo =  VehicleInfo::Select('day_id')
                                    ->Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->Where('day_id' ,'>=', $this->dayFromId)
                                    ->distinct('day_id')->get();
                                    
    }

    public function getTimeFromProperty(){

        $this->getDayToProperty();
        $this->timesFrom =  VehicleInfo::Select('time')
                                        ->Where('year_id', $this->yearId)
                                        ->Where('month_id', $this->monthId)
                                        ->whereBetween('day_id', [$this->dayFromId, $this->dayToId])
                                        ->distinct('time')
                                        ->get();
        
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
        
    }

    public function getGateProperty(){

        $this->timesToHolder = 'Choose';
        $this->getTimeToProperty();
        $this->gates =  VehicleInfo::Select('gate_id')
                                    ->Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->whereBetween('day_id', [$this->dayFromId, $this->dayToId])
                                    ->whereBetween('time', [$this->timeFromVal, $this->timeToVal])
                                    ->distinct('gate_id')
                                    ->get();
        
    }


    public function getDirectionProperty(){

        $this->timesToHolder = 'Choose';
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
    


    public function getResult(){
        $this->getDirectionProperty();
        $this->result =  VehicleInfo::Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->whereBetween('day_id', [$this->dayFromId, $this->dayToId])
                                    ->whereBetween('time', [$this->timeFromVal, $this->timeToVal])
                                    ->Where('gate_id', $this->gateId)
                                    ->Where('direction_id', $this->directionId)
                                    ->get();


                                    
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
        return view('livewire.gate.filter-one-day');
    }
}
