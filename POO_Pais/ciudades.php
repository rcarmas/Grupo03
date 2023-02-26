<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ciudades</title>
</head>

<body>
	<?php

	include_once('./cubo.php');

	$confederacion = $_GET['dato'];

	echo '<a href="./index.php">Regresar</a>';

	$html = '<br><br><center><table border=1 alingn="center" action=""><tr>';

	foreach ($ciudades as $pais => $ciudad)
		if ($pais == $confederacion) {
			// TITULO DE LA TABLA
			$html .= ' <tr><th colspan=" ' . count($ciudad) . '" bgcolor="#EC7063"> ' . $pais . '</th></tr><tr>';

			foreach ($ciudad as  $indice => $data)
				$html .= "<th> $indice </th>";

			$html .= "</tr>";

			for ($i = 0; $i < count($ciudad); $i++) {
				$html .= '<tr>';
				foreach ($ciudad as  $indice => $data)
					$html .= (isset($data[$i])) ? '<td bgcolor="#D6FAF2">' . $data[$i] . '</td>' : '<td bgcolor="#D6DEFA">&nbsp;</td>';

				$html .= '</tr>';
			}
		}

	$html .= "</table></center>";

	echo $html;
	?>
</body>

</html>