<?php

$pessoas = array();
$pessoas_multi = array();
$dados1 = array();

array_push($pessoas, "Joao", "Andre");

array_push($pessoas_multi, array(
	"nome" => "Joao", 
	"idade" => "24"
));

array_push($dados1, array(
	"produto" => "riocard", 
	"falha" => "24"
));
/*array_push($pessoas_multi, array(
	"nome" => "Andre", 
	"idade" => "27"
));*/

json_encode($pessoas);

json_encode($pessoas_multi);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Exercicio - A</title>
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>
$(function(){

	var teste = <?php echo json_encode($pessoas)?>;
	var teste2 = <?php echo json_encode($pessoas_multi, JSON_PRETTY_PRINT)?>;
	$("#dados").html("Nome: "+teste2[0]["nome"]+" Idade: "+teste2[0]["idade"]);
	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
	// The type of chart we want to create
	type: 'bar',

	// The data for our dataset
	data: {
	    labels: ["Agosto", "Setembro", "Outubro"],
	    datasets: [{
	        label: "RJ",
	        backgroundColor: 'rgb(0, 102, 255)',
	        borderColor: 'rgb(0, 102, 255)',
	        data: [1, 10, 5],
	    },
	    {label: "SP",
	    	        backgroundColor: 'rgb(247, 204, 118)',
	    	        borderColor: 'rgb(247, 204, 118)',
	    	        data: [6, 16, 12],},
	   	{label: "RP",
	    	        backgroundColor: 'rgb(126, 169, 173)',
	    	        borderColor: 'rgb(126, 169, 173)',
	    	        data: [2, 6, 10],}
	    ]
	},

	// Configuration options go here
	options: {
		title: {
		display: true,
		text: 'Total Chamados POS'
		}
	}
	});






	var data = {
	labels: ["Agosto", "Setembro", "Outubro"],
	datasets: [{
            label: "My First dataset",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [1, 10, 5]
        }]

	};

	var options = {
	maintainAspectRatio: false,
	scales: {
	yAxes: [{
	  stacked: true,
	  gridLines: {
	    display: true,
	    color: "rgba(255,99,132,0.2)"
	  }
	}],
	xAxes: [{
	  gridLines: {
	    display: false
	  }
	}]
	}
	};

	Chart.Bar('chart', {
	options: options,
	data: data
	});


	
});
</script>
<style type="text/css">
body {  
  background: #fff;
  padding: 16px;
}

canvas {

}

.chart-container {
  position: relative;
  margin: 20px;
  height: 30vh;
  width: 40vw;
}
</style>

</head>
<body>
<h2>Cálculo de Média</h2>
<div class="chart-container">
    <canvas id="chart"></canvas>
</div>
<div class="chart-container">
<canvas id="myChart"></canvas>
</div>



</body>

</html>