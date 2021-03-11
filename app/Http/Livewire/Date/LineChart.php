<?php

namespace App\Http\Livewire\Date;

use Livewire\Component;
use Illuminate\Support\Collection;


class LineChart extends Component
{
    public $result = [] ;
    public $resultCount = [] ;
    public $totalVehicles ;
    public $cars = [];
    public $carCount = [];
    public $totalCars;

    public $bus = [];
    public $busCount = [];
    public $totalBus;

    public $suv = [];
    public $suvCount = [];
    public $totalSuv;

    public $van = [];
    public $vanCount = [];
    public $totalVan;

    public $motorcycle = [];
    public $motorcycleCount = [];
    public $totalMotorcycle;
    
    protected $listeners = ['showData'];

    public function showData($val){


        // Create a new collection instance.
        $totalCollection = new Collection($val);

        // Get all unique items.
        $uniqueTotalCollection = $totalCollection->unique('time');
        
        foreach($uniqueTotalCollection as $value){
            array_push($this->result , $value['time']);
            array_push($this->resultCount , $value['minute_count']);
        }
// dd($this->result, $this->resultCount);
        // $this->totalVehicles = array_sum($this->resultCount);


        //bus data





        foreach($val as $value){
            if($value['vehicle_id'] == 1){
                array_push($this->bus , $value['time']);
                array_push($this->busCount , $value['total_count']);
            }
        }
        $this->totalBus = array_sum($this->busCount);


        //car data
        foreach($val as $value){
            if($value['vehicle_id'] == 2){
                array_push($this->cars , $value['time']);
                array_push($this->carCount , $value['total_count']);
            }
        }
        $this->totalCars = array_sum($this->carCount);

        //
        foreach($val as $value){
            if($value['vehicle_id'] == 3){
                array_push($this->suv , $value['time']);
                array_push($this->suvCount , $value['total_count']);
            }
        }
        $this->totalSuv = array_sum($this->suvCount);


        foreach($val as $value){
            if($value['vehicle_id'] == 4){
                array_push($this->van , $value['time']);
                array_push($this->vanCount , $value['total_count']);
            }
        }
        $this->totalVan = array_sum($this->vanCount);


        foreach($val as $value){
            if($value['vehicle_id'] == 5){
                array_push($this->motorcycle , $value['time']);
                array_push($this->motorcycleCount , $value['total_count']);
            }
        }
        $this->totalMotorcycle = array_sum($this->motorcycleCount);

        // $tot = [$this->totalMotorcycle,$this->totalBus,$this->totalSuv,$this->totalVan,$this->totalMotorcycle, $this->totalCars];
        // $this->resultCount;
        // dd($this->vanCount, $tot);
        // $this->totalVehicles = array_sum($tot);
        
                

        
    }

    public function render()
    {
        return view('livewire.date.line-chart');
    }
}
