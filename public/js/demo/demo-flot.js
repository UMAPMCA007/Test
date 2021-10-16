
// CHART BAR STACKED
// ----------------------------------- 
(function(window, document, $, undefined){

  $(function(){

    var data = [{
      "label": "Estimates time",
      "color": "#ff7d01",
      "data": [
        ["Activity 1", 56],
        ["Activity 2", 81],
        ["Activity 3", 97],
        ["Activity 4", 44]
       
      ]
    }, {
      "label": "Actual time",
      "color": "#4a8ef1",
      "data": [
        ["Activity 1", 60],
        ["Activity 2", 11],
        ["Activity 3", 17],
        ["Activity 4", 44]
      ]
   
    }];

   

    var options = {
                    series: {
                        stack: true,
                        bars: {
                            align: 'center',
                            lineWidth: 0,
                            show: true,
                            barWidth: 0.6,
                            fill: 0.5
                        }
                    },
                    grid: {
                        borderColor: '#eee',
                        borderWidth: 1,
                        hoverable: true,
                        backgroundColor: '#fcfcfc'
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: function (label, x, y) { return x + ' : ' + y; }
                    },
                    xaxis: {
                        tickColor: '#fcfcfc',
                        mode: 'categories'
                        
                    },
                    yaxis: {
                        // position: 'right' or 'left'
                        tickColor: '#eee'
                    },
                    shadowSize: 0
                };

    var chart = $('.chart-bar-stacked');
    if(chart.length)
      $.plot(chart, data, options);

    var chartv2 = $('.chart-bar-stackedv2');
    if(chartv2.length)
      $.plot(chartv2, datav2, options);

  });

})(window, document, window.jQuery);



// CHART BAR STACKED
// ----------------------------------- 
(function(window, document, $, undefined){

  $(function(){

    var data = [{
      "label": "Estimates time",
      "color": "#ff7d01",
      "data": [
        ["Activity 1", 56],
        ["Activity 2", 81],
        ["Activity 3", 97],
        ["Activity 4", 44]
       
      ]
    }, {
      "label": "Actual time",
      "color": "#4a8ef1",
      "data": [
        ["Activity 1", 60],
        ["Activity 2", 11],
        ["Activity 3", 17],
        ["Activity 4", 44]
      ]
   
    }];

   

    var options = {
                    series: {
                        stack: true,
                        bars: {
                            align: 'center',
                            lineWidth: 0,
                            show: true,
                            barWidth: 0.6,
                            fill: 0.5
                        }
                    },
                    grid: {
                        borderColor: '#eee',
                        borderWidth: 1,
                        hoverable: true,
                        backgroundColor: '#fcfcfc'
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: function (label, x, y) { return x + ' : ' + y; }
                    },
                    xaxis: {
                        tickColor: '#fcfcfc',
                        mode: 'categories'
                        
                    },
                    yaxis: {
                        // position: 'right' or 'left'
                        tickColor: '#eee'
                    },
                    shadowSize: 0
                };

    var chart = $('.chart-bar-stackedv1');
    if(chart.length)
      $.plot(chart, data, options);

    var chartv2 = $('.chart-bar-stackedv2');
    if(chartv2.length)
      $.plot(chartv2, datav2, options);

  });

})(window, document, window.jQuery);

