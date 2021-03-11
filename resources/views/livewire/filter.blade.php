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
                <option value="AllDays">All Days</option>
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
                <form>
                    <div class="row">
                        <div class="col-sm-6 col-lg-2  col-md-2">
                            <label for="users-list-role">Vehicle Type</label>
                            <fieldset class="form-group">
                                <select class="form-control" id="users-list-role">
                                    <option value="">Choose</option>
                                    <option value="bus">bus</option>
                                    <option value="car">car</option>
                                    <option value="suv">suv</option>
                                    <option value="suv">van</option>
                                    <option value="suv">truck</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-sm-6 col-lg-2  col-md-2">
                            <label for="users-list-status">Year</label>
                            <fieldset class="form-group">
                                <select class="form-control" id="users-list-status">
                                     @foreach($years as $year)
                                        <option value="Active">{{$year}}</option>
                                     @endforeach
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-sm-6 col-lg-2  col-md-2">
                            <label for="users-list-status">Day From</label>
                            <fieldset class="form-group">
                                <select class="form-control" id="users-list-status">
                                     @foreach($days as $day)
                                        <option value="Active">{{$day}}</option>
                                     @endforeach
                                </select>
                            </fieldset>
                        </div>


                        <div class="col-sm-6 col-lg-2  col-md-2">
                            <label for="users-list-status">Day To</label>
                            <fieldset class="form-group">
                                <select class="form-control" id="users-list-status">
                                     @foreach($days as $day)
                                        <option value="Active">{{$day}}</option>
                                     @endforeach
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-sm-6 col-lg-2  col-md-2">
                            <label for="users-list-status">hour From</label>
                            <fieldset class="form-group">
                                <select class="form-control" id="users-list-status">
                                     @foreach($hours as $hour)
                                        <option value="Active">{{$hour}}</option>
                                     @endforeach
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-sm-6 col-lg-2  col-md-2">
                            <label for="users-list-status">hour To</label>
                            <fieldset class="form-group">
                                <select class="form-control" id="users-list-status">
                                     @foreach($hours as $hour)
                                        <option value="Active">{{$hour}}</option>
                                     @endforeach
                                </select>
                            </fieldset>
                        </div>
                        
                        @if($filtreVal == "OneDay")
                       
              
                    
                        <div class="col-sm-6 col-lg-2  col-md-2">
                            <label for="users-list-verified">Time From</label>
                            <fieldset class="form-group">
                                <select class="form-control" id="users-list-verified">
                                     @foreach($time_minutes as $time_minute)
                                        <option value="Active">{{$time_minute}}</option>
                                     @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-sm-6 col-lg-2  col-md-2">
                            <label for="users-list-department">Time To</label>
                            <fieldset class="form-group">
                                <select class="form-control" id="users-list-department">
                                     @foreach($time_minutes as $time_minute)
                                        <option value="Active">{{$time_minute}}</option>
                                     @endforeach
                                </select>
                            </fieldset>
                        </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
   
</div>
