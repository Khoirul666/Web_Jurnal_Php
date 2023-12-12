"use strict";
setTimeout(function(){

    $.ajax({
        url:'ajax_data_jenis.php',
        method:'GET',
        success:function(data){
            // console.log(JSON.parse(data));
            let array_data = JSON.parse(data);

            $(document).ready(function() {

                donutChart();

                $(window).on('resize',function() {
                    window.donutChart.redraw();
                });

            });

            function donutChart() {
                window.areaChart = Morris.Donut({
                    element: 'donut-example',
                    redraw: true,
                    data: [
                        { label: array_data[0]['jenis'], value: array_data[0]['jumlah'] },
                        { label: array_data[1]['jenis'], value: array_data[1]['jumlah'] }
                        ],
                    colors: ['#5FBEAA', '#34495E', '#FF9F55']
                });
            }
        }
    });

    $.ajax({
        url:'ajax_data_bar.php',
        method:'GET',
        success:function(data){
            Morris.Bar({
                element: 'morris-bar-chart',
                data: JSON.parse(data),
                xkey: 'tahun',
                ykeys: ['kejadian', 'bencana'],
                labels: ['KEJADIAN', 'BENCANA'],
                barColors: ['#5FBEAA', '#5D9CEC'],
                hideHover: 'auto',
                gridLineColor: '#eef0f2',
                resize: true
            });
        }
    });

// Morris bar chart
    
},350);