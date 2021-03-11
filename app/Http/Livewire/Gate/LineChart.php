<?php

namespace App\Http\Livewire\Gate;

use Livewire\Component;

class LineChart extends Component
{

    public $result = [] ;
    public $resultCount = [] ;
    public $totalVehicles ;
    
    protected $listeners = ['showData'];

    public function showData($val){

        foreach($val as $value){
            array_push($this->result , $value['time']);
            array_push($this->resultCount , $value['minute_count']);
        }

        $this->totalVehicles = array_sum($this->resultCount);
        
    }

    
    public function render()
    {
        return view('livewire.gate.line-chart');
    }
}
