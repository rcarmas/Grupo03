<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ciudades</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<?php

	include_once('./cubo.php');

	$confederacion = $_GET['dato'];

	echo '<a href="./index.php">Regresar</a>';

	$html = '<center>
	<div class="container">
	<div class="col-lg-6">
	<br><br>
	<img src="./img/bandera' . $confederacion . '.png" width="300px">
	<br><br>
	<br><br><table border=1 alingn="center" action="" class="table table-striped table-bordered border border-secondary">';

	foreach ($ciudades as $pais => $ciudad)
		if ($pais == $confederacion) {
			// TITULO DE LA TABLA
			$html .= ' <tr><th colspan=" ' . count($ciudad) . '" bgcolor="#EC7063" class="text-center bg-success text-white"> ' . $pais . '</th></tr><tr>';

			foreach ($ciudad as  $indice => $data)
				$html .= "<th> $indice </th>";

			$html .= "</tr>";

			for ($i = 0; $i < count($ciudad); $i++) {
				$html .= '<tr>';
				foreach ($ciudad as  $indice => $data) {
					$html .= (isset($data[$i])) ? '<td bgcolor="#D6FAF2">' . $data[$i] . '</td>' : '<td bgcolor="#D6DEFA">&nbsp;</td>';
				}
				$html .= '</tr>';
			}
		}

	$html .= "</table></div></div></center>";

	echo $html;
	?>
</body>

</html>