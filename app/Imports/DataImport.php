<?php

namespace App\Imports;

use App\RawData;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Arr;
use App\Models\VehicleInfo;
use DB;
// use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToCollection
{
    public $yr;
    public $year; 
    public $value;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //     return new RawData([
    //         //
    //     ]);
    // }

    public function collection(Collection $rows)
    {

        try {
            
            
             
        $year  = DB::table('years')->select('id', 'name');
        $month = DB::table('months')->select('id', 'name');
        $day = DB::table('days')->select('id', 'name');
        $direction = DB::table('directions')->select('id', 'name');
        $gate = DB::table('gates')->select('id', 'name');
        $vehicles = DB::table('vehicles')->select('id', 'type')->get();


        
      

            $firstRow = $rows[0];
            $counter = 1; 
          
            ini_set('max_execution_time',0);
         
                foreach($vehicles as $vehicle){  

                    foreach($rows as $value){
                        if($counter == 1 || $value[0] == 'year'){

                            $counter++;
                            continue;
                        }

                              $mon =  $month->Where('name',$value[1])->first();
                              $da  =  $day->Where('name',$value[2])->first();
                              $gat =  $gate->Where('name',$value[5])->first();
                              $dir =  $direction->Where('name',$value[6])->first();
                              $yr  =  $year->Where('name',$value[0])->first();
                        
                        switch ($vehicle->type) {
                            
                            
                            case $firstRow[7]:

                                // echo $yr->id;
                                // echo "year :".$value[0];
                                // echo "<br>";
                                // echo "month :".$value[1];
                                // echo "<br>";
                                // echo "day :".$value[2];
                                // echo "<br>";

                                // echo "hour :".$value[3];
                                // echo "<br>";

                                // echo "time :".$value[4];
                                // echo "<br>";
                                // echo "gate :".$value[5];
                                // echo "<br>";
                                // echo "direction :".$value[6];
                                // echo "<br>";
                               

                                // echo  $vehicle->type.": ".$value[7];
                                // echo "<br>";
                                // echo "<br>";
                                // echo "<br>";

                                VehicleInfo::create([
                                    'year_id' => $yr->id,
                                    'month_id' => $mon->id,
                                    'day_id' => $da->id,
                                    'hour' => $value[3],
                                    'time' => $value[3].":".$value[4],
                                    'direction_id' => $dir->id,
                                    'gate_id' => $gat->id,
                                    'vehicle_id' => $vehicle->id,
                                    'total_count' => $value[7],
                                    'minute_count' => $value[13],
                                ]);
                                break;

                            case $firstRow[8]:

                                // echo $yr->id;
                                // echo "year :".$value[0];
                                // echo "<br>";
                                // echo "month :".$value[1];
                                // echo "<br>";
                                // echo "day :".$value[2];
                                // echo "<br>";

                                // echo "hour :".$value[3];
                                // echo "<br>";

                                // echo "time :".$value[4];
                                // echo "<br>";
                                // echo "gate :".$value[5];
                                // echo "<br>";
                                // echo "direction :".$value[6];
                                // echo "<br>";
                               

                                // echo  $vehicle->type.": ".$value[8];
                                // echo "<br>";
                                // echo "<br>";
                                // echo "<br>";
                                VehicleInfo::create([
                                    'year_id' => $yr->id,
                                    'month_id' => $mon->id,
                                    'day_id' => $da->id,
                                    'hour' => $value[3],
                                    'time' => $value[3].":".$value[4],
                                    'direction_id' => $dir->id,
                                    'gate_id' => $gat->id,
                                    'vehicle_id' => $vehicle->id,
                                    'total_count' => $value[8],
                                    'minute_count' => $value[13],
                                ]);
                             
                                
                                break;

                            case $firstRow[9]:
                                VehicleInfo::create([
                                    'year_id' => $yr->id,
                                    'month_id' => $mon->id,
                                    'day_id' => $da->id,
                                    'hour' => $value[3],
                                    'time' => $value[3].":".$value[4],
                                    'direction_id' => $dir->id,
                                    'gate_id' => $gat->id,
                                    'vehicle_id' => $vehicle->id,
                                    'total_count' => $value[9],
                                    'minute_count' => $value[13],
                                ]);
                                
                                break;

                            case $firstRow[10]:
                                VehicleInfo::create([
                                    'year_id' => $yr->id,
                                    'month_id' => $mon->id,
                                    'day_id' => $da->id,
                                    'hour' => $value[3],
                                    'time' => $value[3].":".$value[4],
                                    'direction_id' => $dir->id,
                                    'gate_id' => $gat->id,
                                    'vehicle_id' => $vehicle->id,
                                    'total_count' => $value[10],
                                    'minute_count' => $value[13],
                                ]);
                                
                                break;

                        
                            case $firstRow[11]:
                                
                                VehicleInfo::create([
                                    'year_id' => $yr->id,
                                    'month_id' => $mon->id,
                                    'day_id' => $da->id,
                                    'hour' => $value[3],
                                    'time' => $value[3].":".$value[4],
                                    'direction_id' => $dir->id,
                                    'gate_id' => $gat->id,
                                    'vehicle_id' => $vehicle->id,
                                    'total_count' => $value[11],
                                    'minute_count' => $value[13],
                                ]);
                                break;

                            default:
                                VehicleInfo::create([
                                    'year_id' => $yr->id,
                                    'month_id' => $mon->id,
                                    'day_id' => $da->id,
                                    'hour' => $value[3],
                                    'time' => $value[3].":".$value[4],
                                    'direction_id' => $dir->id,
                                    'gate_id' => $gat->id,
                                    'vehicle_id' => $vehicle->id,
                                    'total_count' => $value[12],
                                    'minute_count' => $value[13],
                                ]);
                        }
                    }
                    // echo $key ;
                    // if($vehicle->type == $row[12]){
                    //     dd("hhh", $row[12]);
                    // }
                    // User::create([
                    //     'name' => $row[0],
                    // ]);
                }
                // dd('out');


        } catch (\Throwable $th) {
            return \redirect()->back()->with('message', 'Please check your excel format or file type');
        }
       
    }

}
