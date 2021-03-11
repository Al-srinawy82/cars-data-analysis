<div>



@if($result)
    <!-- Line Chart -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                
                <div class="card-content">
                    <div class="card-body">
                        <!-- <div id="line-chart" class="height-400"></div> -->
                        <div id="main2" class="height-400"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                
                <div class="card-content">
                    <div class="card-body">
                        <!-- <div id="line-chart" class="height-400"></div> -->
                        <div id="motorcycle" class="height-400"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                
                <div class="card-content">
                    <div class="card-body">
                        <!-- <div id="line-chart" class="height-400"></div> -->
                        <div id="bus" class="height-400"></div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                
                <div class="card-content">
                    <div class="card-body">
                        <!-- <div id="line-chart" class="height-400"></div> -->
                        <div id="car" class="height-400"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                
                <div class="card-content">
                    <div class="card-body">
                        <!-- <div id="line-chart" class="height-400"></div> -->
                        <div id="suv" class="height-400"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                
                <div class="card-content">
                    <div class="card-body">
                        <!-- <div id="line-chart" class="height-400"></div> -->
                        <div id="van" class="height-400"></div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script> 

        var result = {!! json_encode($result) !!};
        var resultCount = {!! json_encode($resultCount) !!};
        var totalVehicles = {!! json_encode($totalVehicles) !!};


        var cars = {!! json_encode($cars) !!};
        var carCount = {!! json_encode($carCount) !!};
        var totalCars = {!! json_encode($totalCars) !!};


        var bus = {!! json_encode($bus) !!};
        var busCount = {!! json_encode($busCount) !!};
        var totalBus = {!! json_encode($totalBus) !!};


        var suv = {!! json_encode($suv) !!};
        var suvCount = {!! json_encode($suvCount) !!};
        var totalSuv = {!! json_encode($totalSuv) !!};


        var van = {!! json_encode($van) !!};
        var vanCount = {!! json_encode($vanCount) !!};
        var totalVan = {!! json_encode($totalVan) !!};


        var motorcycle = {!! json_encode($motorcycle) !!};
        var motorcycleCount = {!! json_encode($motorcycleCount) !!};
        var totalMotorcycle = {!! json_encode($totalMotorcycle) !!};


        var $dark_green = '#8D99D7';
        var $green = '#A4AEE4';
        var $light_green = '#D1D7F6';
        var $lighten_green = '#E6E9FB';

        // #######################################################
        // #######################################################
        // #######################################################
        // #####################Start Of General##################
        // #######################################################
        // #######################################################
        // #######################################################
        var myLineChart = "";
        var myLineChart = echarts.init(document.getElementById('main2'));
            // console.log("Total",result)
            // console.log("Total",resultCount)
        // specify chart configuration item and data
        var option = {
            visualMap: [{
                show: false,
                type: 'continuous',
                seriesIndex: 0,
                min: 0,
                max: 1000,
                color: [$dark_green, $lighten_green]
            }],
            title: {
                text: 'Total Vehicles '+ totalVehicles,
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 20
                    }
            },
            tooltip: {},
            legend: {
                data:['Vehicles'],
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
            },
            xAxis: {
                data: result,
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            yAxis: {
                splitLine: {show: true},
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            series: [{
                name: 'Vehicles',
                type: 'line',
                data: resultCount
            }]
        };

        // use configuration item and data specified to show chart
        myLineChart.setOption(option);
        
        // #######################################################
        // #######################################################
        // #######################################################
        // ####################Start Of motorcycle################
        // #######################################################
        // #######################################################
        // #######################################################


        var motorcycleLineChart = echarts.init(document.getElementById('motorcycle'));
        // console.log("Total Motorcycle",motorcycle)
        // specify chart configuration item and data
        var motorcycOption = {
            visualMap: [{
                show: false,
                type: 'continuous',
                seriesIndex: 0,
                min: 0,
                max: 1000,
                color: [$dark_green, $lighten_green]
                }],
            title: {
                text: 'Total Motorcycle '+ totalMotorcycle,
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 20
                    }
            },
            tooltip: {},
            legend: {
                data:['MotorcyclePedestrian'],
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
            },
            xAxis: {
                data: motorcycle,
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            yAxis: {
                splitLine: {show: true},
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            series: [{
                name: 'MotorcyclePedestrian',
                type: 'line',
                data: motorcycleCount
            }]
        };

        // use configuration item and data specified to show chart
        motorcycleLineChart.setOption(motorcycOption);


        // #######################################################
        // #######################################################
        // #######################################################
        // #######################Start Of Bus####################
        // #######################################################
        // #######################################################
        // #######################################################


        var busLineChart = echarts.init(document.getElementById('bus'));
        // console.log("Total Bus",bus)

        // specify chart configuration item and data
        var busOption = {
            visualMap: [{
                show: false,
                type: 'continuous',
                seriesIndex: 0,
                min: 0,
                max: 1000,
                color: [$dark_green, $lighten_green]
                }],
            title: {
                text: 'Total Bus '+ totalBus,
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 20
                    }
            },
            tooltip: {},
            legend: {
                data:['Bus'],
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
            },
            xAxis: {
                data: bus,
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            yAxis: {
                splitLine: {show: true},
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            series: [{
                name: 'Bus',
                type: 'line',
                data: busCount
            }]
        };

        // use configuration item and data specified to show chart
        busLineChart.setOption(busOption);



        // #######################################################
        // #######################################################
        // #######################################################
        // #######################Start Of Car####################
        // #######################################################
        // #######################################################
        // #######################################################


        var carLineChart = echarts.init(document.getElementById('car'));
        // console.log("Total Cars",cars)

        // specify chart configuration item and data
        var carOption = {
            visualMap: [{
                show: false,
                type: 'continuous',
                seriesIndex: 0,
                min: 0,
                max: 1000,
                color: [$dark_green, $lighten_green]
                }],
            title: {
                text: 'Total Cars '+ totalCars,
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 20
                    }
            },
            tooltip: {},
            legend: {
                data:['Car'],
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
            },
            xAxis: {
                data: cars,
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            yAxis: {
                splitLine: {show: true},
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            series: [{
                name: 'Car',
                type: 'line',
                data: carCount
            }]
        };

        // use configuration item and data specified to show chart
        carLineChart.setOption(carOption);



        // #######################################################
        // #######################################################
        // #######################################################
        // #######################Start Of suv####################
        // #######################################################
        // #######################################################
        // #######################################################


        var suvLineChart = echarts.init(document.getElementById('suv'));
        // console.log("Total Suv",suv)

        // specify chart configuration item and data
        var suvOption = {
            visualMap: [{
                show: false,
                type: 'continuous',
                seriesIndex: 0,
                min: 0,
                max: 1000,
                color: [$dark_green, $lighten_green]
                }],
            title: {
                text: 'Total suv '+ totalSuv,
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 20
                    }
            },
            tooltip: {},
            legend: {
                data:['suv'],
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
            },
            xAxis: {
                data: suv,
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            yAxis: {
                splitLine: {show: true},
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            series: [{
                name: 'suv',
                type: 'line',
                data: suvCount
            }]
        };

        // use configuration item and data specified to show chart
        suvLineChart.setOption(suvOption);


        // #######################################################
        // #######################################################
        // #######################################################
        // #######################Start Of suv####################
        // #######################################################
        // #######################################################
        // #######################################################


        var vanLineChart = echarts.init(document.getElementById('van'));
        // console.log("Total Van",van)

        // specify chart configuration item and data
        var vanOption = {
            visualMap: [{
                show: false,
                type: 'continuous',
                seriesIndex: 0,
                min: 0,
                max: 1000,
                color: [$dark_green, $lighten_green]
                }],
            title: {
                text: 'Total Van '+ totalVan,
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 20
                    }
            },
            tooltip: {},
            legend: {
                data:['Van'],
                textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
            },
            xAxis: {
                data: van,
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            yAxis: {
                splitLine: {show: true},
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: '#FFEDC0',
                        fontSize: 16
                    }
                }
            },
            series: [{
                name: 'Van',
                type: 'line',
                data: vanCount
            }]
        };

        // use configuration item and data specified to show chart
        vanLineChart.setOption(vanOption);




    </script>
@endif

</div>
