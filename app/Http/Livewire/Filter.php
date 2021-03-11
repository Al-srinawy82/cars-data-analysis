<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CarData;
use Illuminate\Support\Arr;



class Filter extends Component
{
    public $filtreBtn;
    public $filtreVal;
    public $data;
    public $years;
    public $months, $days, $hours, $time_minutes;


    public function mount(){
        // dd($this->filtreVal);
        $this->filtreVal = "OneDay";
        $this->filtreSet();
    }

    public function filtreSet(){
        $this->filtreVal = $this->filtreVal;

        if($this->filtreVal == "OneDay"){
           

            $carData = CarData::all();

            $this->years = ""; 
            $this->months = ""; 
            $this->days = ""; 
            $this->hours = ""; 
            $this->time_minutes = ""; 

            // $this->years = $carData->pluck('year')->unique();
            // $this->months = $carData->pluck('month')->unique();
            // $this->days = $carData->pluck('day')->unique();
            // $this->hours = $carData->pluck('hour')->unique();
            // $this->time_minutes = $carData->pluck('time_minute')->unique();
            
            

                         

        }

    }
    public function render()
    {
        return view('livewire.filter');
    }
}
