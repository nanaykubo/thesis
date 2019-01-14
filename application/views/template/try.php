<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart', 'controls']});

google.charts.setOnLoadCallback(drawDashboard);

function drawDashboard() {
    var jsonData = $.ajax({
          url: "<?php echo base_url('template/getpie/') ?>",
          dataType: "json",
          async: false
          }).responseText;
    
    var data = new google.visualization.DataTable(jsonData);                
    var view = new google.visualization.DataView(data);                     
    view.setColumns([{
      calc: function (data, row) {
        return new Date(data.getValue(row, 0))
      },
      type: 'date',
      label: 'Data'
    }, 1, 2, 3, 4]);


    var dashboard = new google.visualization.Dashboard(document.getElementById('dashboard_div'));   

    var dataRangeSlider = new google.visualization.ControlWrapper({     
        'controlType': 'DateRangeFilter',
        'containerId': 'filter_div',
        'options': {
            'filterColumnLabel': 'Data'
       }
    });


    google.visualization.events.addListener(dataRangeSlider, 'ready', function () {
        var state = dataRangeSlider.getState();
        console.log(state.lowValue, state.highValue);
      });


    var lineChart = new google.visualization.ChartWrapper({
        'chartType': 'LineChart',
        'containerId': 'chart_div',
        'options': {
            'title': 'Numero registrazioni per operatore',              'width':1200,
            'height':900,
            chartArea:{left:80,top:50,width:"70%",height:"80%"}
        }

    });


    dashboard.bind(dataRangeSlider, lineChart);
    dashboard.draw(data);

}
</script>
  </head>

  <body>
    <!--Div that will hold the dashboard-->
    <div id="dashboard_div">
      <!--Divs that will hold each control and chart-->
      <div id="filter_div"></div>
      <div id="chart_div"></div>
    </div>
  </body>
</html>
  </body>
</html>