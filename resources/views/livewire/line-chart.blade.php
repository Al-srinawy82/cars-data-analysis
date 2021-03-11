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

    <script>    
        var result = {!! json_encode($result) !!};
        var vehicalType = {!! json_encode($vehicalType) !!};
        var resultCount = {!! json_encode($resultCount) !!};
        var totalVehicles = {!! json_encode($totalVehicles) !!};
        console.log(result);
        console.log(resultCount);



        var $dark_green = '#8D99D7';
        var $green = '#A4AEE4';
        var $light_green = '#D1D7F6';
        var $lighten_green = '#E6E9FB';



        


    // ####################Start Of Line Chart################
    
    var myLineChart = echarts.init(document.getElementById('main2'));

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
      text: 'Total'+' '+ vehicalType +' '+ totalVehicles,
      textStyle: {
              color: '#FFEDC0',
              fontSize: 20
          }
  },
  tooltip: {},
  legend: {
      data:[vehicalType],
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
      name: vehicalType,
      type: 'line',
      data: resultCount
  }]
};

    // use configuration item and data specified to show chart
    myLineChart.setOption(option);
    




        
var $dark_green = '#8D99D7';
var $green = '#A4AEE4';
var $light_green = '#D1D7F6';
var $lighten_green = '#E6E9FB';




// Line chart
// ------------------------------

var lineChart = echarts.init(document.getElementById('line-chart'));

data = [[resultCount, result]];
console.log(data)
var dateList = data.map(function (item) {
    
    return item[0];
});
var valueList = data.map(function (item) {
    return item[1];
});

var lineChartoption = {

    // Make gradient line here
    visualMap: [{
        show: false,
        type: 'continuous',
        seriesIndex: 0,
        min: 0,
        max: 400,
        color: [$dark_green, $lighten_green]
    }],
    tooltip: {
        trigger: 'axis'
    },
    xAxis: [{
        data: dateList,
        splitLine: {show: true},
        axisLabel: {
            show: true,
            textStyle: {
                color: '#FFEDC0',
                fontSize: 16
            }
        }
    }],
    yAxis: [{
        splitLine: {show: false},
        axisLabel: {
            show: true,
            textStyle: {
                color: '#FFEDC0',
                fontSize: 16
            }
        }
    }],
    series: [{
        type: 'line',
        showSymbol: false,
        data: valueList
    }]
};

lineChart.setOption(lineChartoption);





    </script>
    @endif

</div>
