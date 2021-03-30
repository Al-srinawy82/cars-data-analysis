<div>
<div class="col-md-12">
    <div class="card">
        <div class="">
            <!-- <label class="card-title">File input</label> -->
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <h5 class="card-title d-inline " >Upload Excel File</h5>

                        <fieldset class="form-group mt-1">

                            <!-- <form    method="post" action="{{route('upload')}}" enctype="multipart/form-data"> -->
                            <form  wire:submit.prevent="save"    method="post"  enctype="multipart/form-data">
                            
                            @csrf
                       
                            <div class="input-group">
                                <button class="btn bg-gradient-primary mr-1  waves-effect waves-light" type="submit" id="inputGroupFileAddon03">Upload</button>
                                <!-- <input wire:model="excel" name="excel" type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload"> -->
                                
                                <input wire:model="excel" type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                <div wire:loading wire:target="save" class="justify-content-center text-center" style=" opacity:0.50; background:#BED6F6;  z-index:10; top:0; bottom: 0; left:0; right: 0; position:fixed; cursor: pointer " >
                                        <div style=" margin-top:400px; margin-left:550px;" class="">
                                            <div style=" border-left: 5px solid #3e3d98 ; border-radius:5px; width: 371px; background-color:white " class=" ">
                                            <!-- style="width: 5rem; height: 5rem;" -->
                                                <span class="spinner-grow text-primary" style="width: 5rem; height: 5rem;" role="status" ></span>
                                                <br>
                                                <!-- <span style="color:#3e3d98 ; border-style: solid"  class="mr-1"></span> -->
                                                <h4 style="color:#3e3d98 ; " >Your File going through magical process  <br> please wait </h4>

                                            </div>
                                        </div>
                                    </div>
                             @if(session()->has('message'))<span class="error pt-1 danger ml-2">{{ session()->get('message') }}</span>@endif
                            @error('excel') <span class="error pt-1 danger ml-2">{{ $message }}</span> @enderror

                            </div>

                            
                            </form>

                              

                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
