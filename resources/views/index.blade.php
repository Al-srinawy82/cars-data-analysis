@extends('layouts.app')
@section('content')
 

    <!-- BEGIN: Content-->
    <div class="content">
        <div class="content-overlay"></div>
        <!-- <div class="header-navbar-shadow"></div> --> 
        <div class="content-wrapper " style="position: static !important;">
   
           
            <div class="content-body">
    
                 <!-- users list start -->
                 <section class="">
                    <!-- users filter start -->
                    <div class="card">
                        <div class="card-header">
                             
                            <span  class="">
                                <h4 class="card-title d-inline " >Filter By </h4>
                                <div class="d-inline dropdown">
                                    <button class="btn btn-sm bg-gradient-primary dropdown-toggle   waves-effect waves-light" type="button" id="filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Choose
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton101">
                                        <a class="dropdown-item" href="#">All Days</a>
                                        <a class="dropdown-item" href="#">One Day</a>
                                    </div>
                                </div>
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
                        <script>
                            $(document).ready(function(){
                                alert('hhh');
                            });
                        </script>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="users-list-filter">
                                    <form>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-role">Vehicle Type</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-role">
                                                        <option value="">car1</option>
                                                        <option value="user">car2</option>
                                                        <option value="staff">car3</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-status">Date</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-status">
                                                        <option value="">All</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Blocked">Blocked</option>
                                                        <option value="deactivated">Deactivated</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-verified">Time From</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-verified">
                                                        <option value="">All</option>
                                                        <option value="true">Yes</option>
                                                        <option value="false">No</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-department">Time To</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-department">
                                                        <option value="">All</option>
                                                        <option value="Sales">Sales</option>
                                                        <option value="Devlopment">Devlopment</option>
                                                        <option value="Management">Management</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- users filter end -->
                    <!-- Ag Grid users list section start -->
                   
                    <!-- Ag Grid users list section end -->
                    <div class="content-header row">
                        <div class="content-header-left col-md-9 col-12 mb-2">
                            <div class="row breadcrumbs-top">
                                <div class="col-12">
                                    <h2 class="content-header-title float-left mb-0">Vehicle Type</h2>
                                    <div class="breadcrumb-wrapper col-12">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                                            </li>
                                          
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                            <div class="form-group breadcrum-right">
                                <div class="dropdown">
                                    <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Time</a>
                                        <a class="dropdown-item" href="#">Vehicle Type</a>
                                        <a class="dropdown-item" href="#">Date</a>
                                        <a class="dropdown-item" href="#">Gate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>
                <!-- users list ends -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bar Chart</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="bar-chart" class="height-400"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Line Chart -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line Chart</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="line-chart" class="height-400"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

 

    @endsection