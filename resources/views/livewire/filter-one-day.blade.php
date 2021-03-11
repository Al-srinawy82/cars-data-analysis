<div>
<style>
.fBtn{
    background : #640064;
    color : #FFFFFF;
    background-image : -webkit-linear-gradient(60deg, #7367F0, rgba(115, 103, 240, 0.5));
    background-image :         linear-gradient(30deg, #7367F0, rgba(115, 103, 240, 0.5));
    background-repeat : repeat-x;
    border-radius: 0.4285rem;
    font-size: 0.9rem;
    line-height: 1;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
</style>


<div class="card">
    <div class="card-header">
            
        <span  class="">
        
        <h4 class="card-title d-inline " >Filter By </h4>
            <select name="" id="" wire:change="filtreSet" wire:model="filtreVal" class="fBtn">
                <option value="OneDay">One Day</option>
                <!-- <option value="AllDays">All Days</option> -->
            </select>
        </span>
        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                <!-- <li><a data-action=""><i class="feather icon-rotate-cw users-data-filter"></i></a></li> -->
                <!-- <li><a data-action="close"><i class="feather icon-x"></i></a></li> -->
            </ul>
        </div>
    </div>
    <div class="card-content collapse show">
        <div class="card-body">
            <div class="users-list-filter">
            
                    <div class="row">
                        <div class="col-sm-6 col-lg-2  col-md-3">
                            <label for="users-list-role">Vehicle Type</label>
                            <fieldset class="form-group">
                            
                                <select wire:change="getYearProperty" wire:model="vehicle" class="form-control" id="users-list-role" {{$disabled}}>
                                        <option>Choose</option>
                                    @foreach($vehicles as $vehicle)
                                        <option value="{{$vehicle->id}}">{{$vehicle->type}}</option>
                                    @endforeach
                                    
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-sm-6 col-lg-2  col-md-3">
                            <label for="users-list-status">Year</label>
                            <fieldset class="form-group">
                                <select wire:change="getMonthProperty" wire:model="yearId" class="form-control" id="users-list-status" {{$disabled}}>
                                        <option>Choose</option>
                                    @if($years)
                                     @foreach($years as $year)
                                        <option value="{{$year->year->id}}">{{$year->year->name}}</option>
                                     @endforeach
                                    @endif
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-sm-6 col-lg-2  col-md-3">
                            <label for="users-list-status">month</label>
                            <fieldset class="form-group">
                                <select wire:change="getDayProperty" wire:model="monthId" class="form-control" id="users-list-status" {{$disabled}}>
                                        <option>Choose</option>
                                    @if(count($months) != 0)
                                     @foreach($months as $month)
                                        <option value="{{$month->month->id}}">{{$month->month->name}}</option>
                                     @endforeach
                                    @endif
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-sm-6 col-lg-2  col-md-3">
                            <label for="users-list-status">Day</label>
                            <fieldset class="form-group">
                                <select wire:change="getTimeFromProperty" wire:model="dayId" class="form-control" id="users-list-status" {{$disabled}}>

                                        <option>Choose</option>

                                    @if(count($days) != 0)
                                     @foreach($days as $day)
                                        <option value="{{$day->day->id}}">{{$day->day->name}}</option>
                                     @endforeach
                                    @endif
                                     
                                </select>
                            </fieldset>
                        </div>


               
                    
                        <div class="col-sm-6 col-lg-2  col-md-3">
                            <label for="users-list-verified">Time From</label>
                            <fieldset class="form-group">
                                <select wire:change="getTimeToProperty" wire:model="timeFromVal" class="form-control" id="users-list-verified" {{$disabled}}>
                                <option>Choose</option>

                                    @if($timesFrom)
                                        @foreach($timesFrom as $timeFrom)
                                            <option value="{{$timeFrom->time}}">{{Str::substr($timeFrom->time, 0, 5)}}</option>
                                        @endforeach
                                    @endif
 
                                 </select>
                            </fieldset>
                        </div>
                        <div class="col-sm-6 col-lg-2  col-md-3">
                            <label for="users-list-department">Time To</label>
                            <fieldset class="form-group">
                                <select wire:change="getGateProperty"  wire:model="timeToVal" class="form-control" id="users-list-department" {{$disabled}}>
                                
                                <option>Choose</option>

                                @if($timesTo)
                                     @foreach($timesTo as $timeTo)
                                        <option value="{{$timeTo->time}}">{{Str::substr($timeTo->time, 0, 5)}}</option>
                                     @endforeach
                                @endif

                                </select>
                            </fieldset>
                        </div>
                      

                        <div class="col-sm-6 col-lg-2  col-md-3">
                            <label for="users-list-department">Gate</label>
                            <fieldset class="form-group">
                                <select wire:change="getDirectionProperty"  wire:model="gateId" class="form-control" id="users-list-department" {{$disabled}}>
                                
                                <option>Choose</option>

                                @if($gates)
                                     @foreach($gates as $gate)
                                        <option value="{{$gate->gate->id}}">{{$gate->gate->name}}</option>
                                     @endforeach
                                @endif

                                </select>
                            </fieldset>
                        </div>

                        <div class="col-sm-6 col-lg-2  col-md-3">
                            <label for="users-list-department">Direction</label>
                            <fieldset class="form-group">
                                <select wire:change="setFilter"  wire:model="directionId" class="form-control" id="users-list-department" {{$disabled}}>
                                
                                <option>Choose</option>

                                @if($directions)
                                     @foreach($directions as $direction)
                                        <option value="{{$direction->direction->id}}">{{$direction->direction->name}}</option>
                                     @endforeach
                                @endif

                                </select>
                            </fieldset>
                        </div>

                        <div class="col-sm-6 col-lg-6  col-md-6">
                            <fieldset class="form-group">


                            @if($months && $days && $timesFrom && $timesTo && $gates && $directions)
                            <button class="btn bg-gradient-primary mt-2  waves-effect waves-light" wire:click="getResult" {{$hidden}}>Search</button>
                            @endif
                            <a href="{{url('vehicle')}}" class="btn bg-gradient-primary mt-2  waves-effect waves-light" type="reset" >Reset Filter</a>

                            </fieldset>
                        </div>

                      
                      
                    </div>
                
            </div>
        </div>
    </div>
</div>
   
</div>
