//Load when document is ready
$(document).ready(function () {
  //Load chart package
  google.charts.load('current', { 'packages': ['corechart'] });
  google.charts.load('current', { 'packages': ['gauge'] });

  //Load when packages are done loading
  google.charts.setOnLoadCallback(drawChart);

  //Set options, data and draw the chart
  function drawChart() {
    //Gage options
    var gage_options = {
      redFrom: 40, redTo: 50,
      yellowFrom: 30, yellowTo: 40,
      minorTicks: 5, max: 50, height: 300, width: 600
    };
    //graph options
    var graph_options = {
      hAxis: {
        direction: -1 //left to right instead of right to left
      },
      curveType: 'none',
      legend: { position: 'bottom' }
    };
    //preset gage data
    var gage_data = google.visualization.arrayToDataTable([
      ['Label', 'Value'],
      ['Temperature', 0],
      ['Humidity', 0],
      ['Rain %', 0]
    ]);

    //select the element in which the chart and gage should be loaded
    var graph = new google.visualization.LineChart(document.getElementById('chart'));
    var gage = new google.visualization.Gauge(document.getElementById('gage'));

    //refersh data (see function)
    refreshData();

    //refresh data, ajax call to load.php and refreshes data
    function refreshData() {
      var json = JSON.parse($.ajax({
        url: '/load.php',
        dataType: 'json',
        async: false
      }).responseText);

      //create a competable datatable and draw the chart (we also load the values for the gages and time)
      var graph_data = google.visualization.arrayToDataTable(json);
      gage_data.setValue(0, 1, parseFloat(json[1][1]));
      gage_data.setValue(1, 1, parseFloat(json[1][2]));
      gage_data.setValue(2, 1, parseFloat(json[1][3]));
      graph.draw(graph_data, graph_options);
      gage.draw(gage_data, gage_options)
      $("#time").text(json[1][0]);
    }

    //refresh every 2 seconds
    setInterval(refreshData(), 2000);

    //hide graph after loading it once
    $("#graph_div").hide();
  }
