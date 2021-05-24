<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
       text: "District count comparision "
      },
      axisX: {
        title:"Ditricts",
       maximum: 85
      },
      axisY: {
        title:"Active case Rate"
      },

      legend:{
        verticalAlign: "bottom",
        horizontalAlign: "left"

      },
      data: [
      {
        type: "bubble",
        legendText: "Size of Bubble Represents Active cases",
        showInLegend: true,
        legendMarkerType: "circle",
 toolTipContent: "<strong>{name}</strong> <br/> Active case Rate: {y}<br/> Districts: {x} yrs<br/>",
     dataPoints: [
     { x: 78.1, y: "Ahmednagar",  name: "Ahmednagar" },
     { x: 68.5, y: "Akola", name: "Akola"},
	 { x: 72.5, y:"Brazil",  name: "Brazil"},
     { x: 76.5, y:"Mexico", name: "Mexico"},
     { x: 50.9, y: "Nigeria", name: "Nigeria"},
     { x: 68.6, y: "Russia", name: "Russia" },
     { x: 82.9, y:  "Japan",  name: "Japan" },
     { x: 79.8, y:"Australia", name:"Australia" }
     
     
     ]
   }
   ]
 });

chart.render();
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></head>
<body>
<br>
<br>
<br>
  <div id="chartContainer" style="height: 200px; width: 80%;">
  </div>
</body>
</html>
	
	
	</script>