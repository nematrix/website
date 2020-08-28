//chart DOM
let Trend_chart = document.getElementById('Trend_chart').getContext('2d');
//Globa options
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontsize = 50;
Chart.defaults.global.defaultFontColor = '#FFB302';
//Gradient stroke and points
var gradient_stroke = Trend_chart.createLinearGradient(700, 0, 100, 0);
gradient_stroke.addColorStop(0, 'green');//End point
gradient_stroke.addColorStop(1, 'red');//Start point
//Gradient_fill
var gradient_fill = Trend_chart.createLinearGradient(700, 0, 100, 0);
gradient_fill.addColorStop(0, '#FFB302');//End fill_background
gradient_fill.addColorStop(1, '#FFB302');//start fill_background
//x-axis animation

// Chart's description
let Progress_chart = new Chart(Trend_chart, {
  //Type of Chart
  type: 'line',
  //the statiticals of the market
  data:{
    //The name of variables
    labels:['Monday', 'Tuesday', 'Wenesday', 'Thursday', 'Friday', 'saturday', 'Sunday'],
    //nam of the chart and values
    datasets:[{
      //The name of the legend
      label: 'sales',
      //Data values and properties
      data:[40, 40, 50, 60, 18, 59, 70 ],
      backgroundColor: gradient_fill,
      borderWidth: 3,
      borderColor: gradient_stroke,
      pointBorderColor: false,
      pointBackgroundColor:['red', 'green', 'black'],
      pointcolor: 'white',
      pointRadius: 7,
      fill:true
    }]
  },//End of datasets
  //Targets on the chart
  options:{
    //title of chart
    title:{
      display: true,
      text: 'Sales and product analsys',
      fontSize:25
    },
    //legend on the chart
    legend:{
      display:false
    },
    //chart outerlook
    layout: {
      padding:10
    },
    //scales
    scales:{
      //x and y axes
      xAxes:[{
        gridLines: {
          display: false
        }
      }], //end of xAxes
      yAxes:[{
        gridLines: {
          color: '#FFB302',
          lineWidth: 1
        }
      }] //end of yAxes
    },//End of scales
    //animations
    //line c
    elements: {
      line: {
          tension: 0.3
      }
    }
    }//End of options
  //End of oject chart
});
$('document').ready(function() {
  /*  click view the shop products and service */
    $('.Days_num').hide();
    $('.fa-angle-right').on('click', closed);
      function closed() {
        var time_Row = $('.Days_num').show();
      }
      //media text_area
    //product ready done
});
