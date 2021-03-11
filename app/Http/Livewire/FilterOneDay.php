<?php

namespace App\Http\Livewire;
use App\Models\CarData;
use App\Models\Vehicle;
use App\Models\VehicleInfo;
use Livewire\Component;
use Illuminate\Support\Str;




class FilterOneDay extends Component
{
    public $filtreVal, $filtreBtn;
    public $hours, $time_minutes;
    public $vehicles, $vehicle ;
    public $years, $yearId;
    public $days = [], $dayId;
    public $months = [], $monthId;
    public $timesFrom, $timeFromVal;
    public $timesTo, $timeToVal, $timesToHolder;
    public $result, $gates, $gateId, $directions, $directionId;
    public $monthHolder, $timesFromHolder, $dayToHolder, $directionHolder, $gateHolder, $dayHolder, $yearHolder;
    public $disabled, $hidden;
    
    public function mount(){
        
        $this->vehicles = Vehicle::all();
         $this->filtreVal = "OneDay";
        $this->filtreSet();

    }

    public function restVar(){

        $this->years = [];
        $this->days = [];
        $this->months = [];
        $this->timesFrom = [];
        $this->timesTo = [];
        $this->gates = [];
        $this->directions = [];

    }

    
    public function getYearProperty(){
        
        
        $this->yearHolder = 'Choose';
        $this->years =  VehicleInfo::Select('year_id')->Where('vehicle_id', $this->vehicle)->distinct('year_id')->get();
       
        
    }

    public function getMonthProperty(){

        $this->monthHolder = 'Choose';
        $this->getYearProperty();
        $this->months =  VehicleInfo::Select('month_id')->Where('year_id', $this->yearId)->distinct('month_id')->get();
  
        
    }

    public function getDayProperty(){
        
        $this->dayHolder = 'Choose';
        $this->getMonthProperty();
        $this->days =  VehicleInfo::Select('day_id')->Where('month_id', $this->monthId)->distinct('day_id')->get();
        
    }

    public function getTimeFromProperty(){

        $this->timesFromHolder = 'Choose';
        $this->getDayProperty();
        $this->timesFrom =  VehicleInfo::Select('time')
                                        ->Where('vehicle_id', $this->vehicle)
                                        ->Where('year_id', $this->yearId)
                                        ->Where('month_id', $this->monthId)
                                        ->Where('day_id', $this->dayId)
                                        ->distinct('time')
                                        ->get();
        
    }

    public function getTimeToProperty(){

        $this->timesToHolder = 'Choose';
        $this->getTimeFromProperty();
        $this->timesTo =  VehicleInfo::Select('time')
                                    ->Where('vehicle_id', $this->vehicle)
                                    ->Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->Where('day_id', $this->dayId)
                                    ->Where('time' ,'>', $this->timeFromVal)
                                    ->distinct('time')
                                    ->get();
        
    }


    public function getGateProperty(){

        $this->gateHolder = 'Choose';
        $this->getTimeToProperty();
        $this->gates =  VehicleInfo::Select('gate_id')
                                    ->Where('vehicle_id', $this->vehicle)
                                    ->Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->Where('day_id', $this->dayId)
                                    ->whereBetween('time', [$this->timeFromVal, $this->timeToVal])
                                    ->distinct('gate_id')
                                    ->get();
        
    }


    public function getDirectionProperty(){

        $this->directionHolder = 'Choose';
        $this->getGateProperty();
        $this->directions =  VehicleInfo::Select('direction_id')
                                    ->Where('vehicle_id', $this->vehicle)
                                    ->Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->Where('day_id', $this->dayId)
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
        $this->result =  VehicleInfo::Where('vehicle_id', $this->vehicle)
                                    ->Where('year_id', $this->yearId)
                                    ->Where('month_id', $this->monthId)
                                    ->Where('day_id', $this->dayId)
                                    ->whereBetween('time', [$this->timeFromVal, $this->timeToVal])
                                    ->Where('gate_id', $this->gateId)
                                    ->Where('direction_id', $this->directionId)
                                    ->get();

        
                                    
        $this->emit('showData', $this->result, $this->vehicle);


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
        return view('livewire.filter-one-day');
    }
}
