@extends('layouts.app')
@section('content')
 

    <!-- BEGIN: Content-->
    <div class="content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">

            <div class="content-body">
                <!-- Knowledge base Jumbotron -->
                <section id="knowledge-base-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card knowledge-base-bg white">
                                <div class="card-content">
                                    <div class="card-body p-sm-4 p-2">
                                        <h1 class="white">Somthing about the system</h1>
                                        <p class="card-text mb-2">
                                            Somthing about the systemSomthing about the systemSomthing about the system
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Knowledge base Jumbotron ends -->
                <!-- Knowledge base -->
                <livewire:file-upload/>
                <section id="knowledge-base-content">
                    <div class="row search-content-info">
                        <!-- <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="gate">
                                        <img src="app-assets/images/pages/graphic-1.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>GATE</h4>
                                        <small class="text-dark">brief about what to do inside this part</small>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-6 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="date">
                                        <img src="app-assets/images/pages/graphic-2.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>Date</h4>
                                        <small class="text-dark">brief about what to do inside this part</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="vehicle">
                                        <img src="app-assets/images/pages/graphic-3.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>Vehicle Type</h4>
                                        <small class="text-dark">brief about what to do inside this part</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>
                <!-- Knowledge base ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection