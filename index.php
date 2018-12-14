<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALC Sistema de Ayudas</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon" href="ico.ico">
	<script>
		<?php
		if ( !empty( $_GET['exists'] ) && $_GET['exists'] == 'true' ) {
		?>	
		alert( 'Ya hay una ayuda registrada para el portador de este numero de Cédula.!' );
		<?php
		}
		?>
	</script>
	<style type="text/css">
			#container, #sliders {
			    min-width: 310px; 
			    max-width: 800px;
			    margin: 0 auto;
			}
			#container{
			    height: 100%;
			}
			#containe,#containe2{
				display: inline-grid;
				width: 45%;
			}
			#containe2{
				float: left;
			}
	</style>
</head>
<body>
	<script src="highcharts.js"></script>
	<script src="highcharts-3d.js"></script>
	<script src="exporting.js"></script>
	<script src="export-data.js"></script>
	<?php
		include '_nav.php';
		include 'conteo.php';
	?>
	<div>
		<br><hr><br>
		<img src="psuv.png" align="left" width="200px">
		<img src="logo.png" align="right" width="200px">
		<br><br><br><br><br><br>
		<div id="container"></div>
		
		

		<script type="text/javascript">
			Highcharts.chart('container', {
			    chart: {
			        type: 'pie',
			        options3d: {
			            enabled: true,
			            alpha: 45,
			            beta: 0
			        }
			    },
			    title: {
			        text: '<b>CANTIDAD DE SOLICITUDES ENTREGADAS</b><br>EN DIRECCIÓN GENERAL'
			    },
			    tooltip: {
			        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			    },
			    plotOptions: {
			        pie: {
			            allowPointSelect: true,
			            cursor: 'pointer',
			            depth: 50,
			            dataLabels: {
			                enabled: true,
			                format: '{point.name}'
			            }
			        }
			    },
			    series: [{
			        type: 'pie',
			        name: 'Porcentaje',
			        data: [
			            {
			                name: 'Entregadas',
			                y: <?php echo $aprobadas['status']; ?>,
			                sliced: true,
			                selected: true
			            },
			            ['Pendientes', <?php echo $pendientes['status']; ?>],
			        ]
			    }]
			});
		</script>

	</div>

</body>
</html>