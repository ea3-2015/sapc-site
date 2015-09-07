<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Sistema</title>

		<script type="text/javascript" src="/html/sistema/js/jquery.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1,//null,
            plotShadow: false
        },
        title: {
            text: 'Personal Registrado '
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Usuario',
            data: [
                //['Ricardo Perez',   12.0],
				 <?php
            // Conectando, seleccionando la base de datos
            $link = mysql_connect('localhost', 'root', 'ema18787')
                or die('No se pudo conectar: ' . mysql_error());
            //echo 'Connected successfully';
            mysql_select_db('sapc') or die('No se pudo seleccionar la base de datos');
            // Realizar una consulta MySQL
            $query = 'SELECT * FROM people';
            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

                for ($i=0; $i<mysql_num_rows($result);$i++){
                    $dato=mysql_fetch_array($result);
                ?>
                ['<?=$dato["name"]." ".$dato["last_name"]."<br>"?>', 1000],
                <?php
				}
				?>
				
            ]
        }]
    });
});


		</script>
	</head>
	<body>
<script src="/html/sistema/js/highcharts.js"></script>
<script src="/html/sistema/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 500px; max-width: 600px; margin: 0 auto"></div>