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

                            <form    method="post" action="{{route('upload')}}" enctype="multipart/form-data">
                            @csrf
                            <!-- <label for="basicInputFile">.....</label> -->
                            <!-- <input type="file"  wire:model="excel" name="excel" class="form-control-file" id="basicInputFile"> -->

                            <div class="input-group">
                                <button class="btn bg-gradient-primary mr-1  waves-effect waves-light" type="submit" id="inputGroupFileAddon03">Upload</button>
                                <input wire:model="excel" name="excel" type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
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
