<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LineChart extends Component
{

    public $result = [] ;
    public $resultCount = [] ;
    public $totalVehicles ;
    public $vehicalType ;
    
    
    protected $listeners = ['showData'];

    public function showData($val, $vehical_id){
        foreach($val as $value){
            array_push($this->result , $value['time']);
            array_push($this->resultCount , $value['total_count']);
            
        }

        

        $this->totalVehicles = array_sum($this->resultCount);
        
        // dd($this->result['time']);

        switch ($vehical_id) {
            case '1':
                $this->vehicalType = "bus";
                break;

            case '2':
                $this->vehicalType = "car";

                break;

            case '3':
                $this->vehicalType = "suv";

                break;

            case '4':
                $this->vehicalType = "van";

                break;
            
            default:
            $this->vehicalType = "motorcycle_pedestrian";

                break;
        }
       
        // $this->vehicalType = $vehical_id;
    }

    public function render()
    {
        
        return view('livewire.line-chart');
    }
}
