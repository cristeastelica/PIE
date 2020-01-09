<html>
<head>
<title>Chart Candidati Clasa</title>
<center>
	<style>
button {
  background-color: #4CAF50;
    display: inline-block;
  color: white;
  padding: 14px 20px;
  margin: 8px 20px;
  border: none;
  cursor: pointer;
  width: 100%;

}

button:hover {
  opacity: 0.8;
}
</style>
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript"
	src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		$.ajax({
			url : "chart-candidati-conexiune.php",
			dataType : "JSON",
			success : function(result) {
				google.charts.load('current', {
					'packages' : [ 'corechart' ]
				});
				google.charts.setOnLoadCallback(function() {
					drawChart(result);
				});
			}
		});

		function drawChart(result) {

			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Nume');
			data.addColumn('number', 'Clasa');
		
			var dataArray = [];
			$.each(result, function(i, obj) {
				dataArray.push([ obj.nume_candidati, parseInt(obj.clasa_candidati)  ]);
			});

			data.addRows(dataArray);

		var barchart_options = {
				title : 'Clasa Candidati',
				width : 1000,
			height : 600,
				legend : 'Clasa'
			};
		var barchart = new google.visualization.BarChart(document
				.getElementById('barchart_div'));
		barchart.draw(data, barchart_options);
		
}	});
</script>

</head>
<body>
	<div class="container2">
<table class="columns">
	<tr>
		<td>
		<div id="piechart_div" style="border: 1px solid #ccc"></div>
		</td>
		<td>
		<div id="barchart_div" style="border: 1px solid #ccc"></div>
		</td>
	</tr>
</table>
</div>
<button onclick="window.open('index.php').style.display='block'" style="width:auto;">Inapoi</button>
</center>
</body>

</html>