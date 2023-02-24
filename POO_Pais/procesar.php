<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $confederacion = $_GET['dato'];

    echo $confederacion;

		//PRIMERA CARA 

		/*foreach ($this->ciudades as $pais => $data) {


			// ALGORITMO PARA LA CABECERA				   
			$html = '
				<table border=1 alingn="center" action="">
				<tr>';

			//CALCULO EL MAXIMO DE LAS COLUMAS DE LA MATRIZ
			$this->CalcularMaxColum($data);

			$tam = count($data);
			// TITULO DE LA TABLA
			$html .= ' <tr>  
						 <th colspan=" ' . $tam . '" bgcolor="#EC7063"> ' . $this->GetNombPais() . '</th>
						 </tr>';

			// IMPRIMIR LA CABECERA
			foreach ($data as $prov => $arreglo)
				$html .= "<th> $prov </th>";

			// ALGORITMO PARA IMPRIMIR LA TABLA EN HTML 
			for ($f = 0; $f < $this->GetNumCuidades(); $f++) { // $max para recorrer hacia abajo
				$html .= '<tr>';
				foreach ($data as $c)
					$html .= (isset($c[$f])) ? '<td bgcolor="#D6FAF2"> <a href="./POO/class.' . $this->GetNombPais() . '.php">' . $c[$f] . '</a> </td>' : '<td bgcolor="#D6DEFA">&nbsp;</td>';
				$html .= '</tr>';
			}
		}
		$html .= "</tr>";
		$html .= "</table>";
		$html .= "<br> <br>";

		echo $html;*/
    ?>
</body>
</html>