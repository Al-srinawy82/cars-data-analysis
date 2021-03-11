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
                {{--<!-- <livewire:filter /> -->--}}
                    <livewire:gate.filter-one-day />
                    
                    <!-- users filter end -->
                    <!-- Ag Grid users list section start -->
                   
                    <!-- Ag Grid users list section end -->
                    <div class="content-header row">
                        <div class="content-header-left col-md-9 col-12 mb-2">
                            <div class="row breadcrumbs-top">
                                <div class="col-12">
                                    <h2 class="content-header-title float-left mb-0">Date</h2>
                                    <div class="breadcrumb-wrapper col-12">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/">Home</a>
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
                                        <a class="dropdown-item" href="vehicle">Vehicle Type</a>
                                        <a class="dropdown-item" href="date">Date</a>
                                        <a class="dropdown-item" href="gate">Gate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>
               
               
                <livewire:gate.line-chart/>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    @endsection