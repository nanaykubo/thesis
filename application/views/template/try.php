<!DOCTYPE HTML>
<html>
<head>  
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
      text: "Adding dataPoints"  
      },
      data: [
      {        
        type: "column",
        dataPoints: [
        { y: 71 },
        { y: 55},
        { y: 50 },
        { y: 65 },
        { y: 95 },
        { y: 68 },
        { y: 28 },
        { y: 34 },
        { y: 14}
      
        ]
      }
      ]
    });

    chart.render();
  }
  </script>
 <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></head>
<body>
  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>
</body>
</html>