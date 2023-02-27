<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confederaciones</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
	<?php
	class Pais extends Nacion
	{

		private $ciudades; // LA CARA
		private $Numcuidades; // Numero total de ciudades que tiene un pais


		// CONSTRUCTOR
		function __construct($NomPais, $data)
		{
			parent::__construct($NomPais, count($data));
			$tope = count($data);
			$this->ciudades = $data;
		}

		// IMPLEMENTAR METODOS	


		public function GetNumCuidades()
		{
			return $this->Numcuidades;
		}


		public function GetCiudades()
		{
			foreach ($this->ciudades as $pais => $data) {
				return $data;
			}
		}



		// METODO PARA CALCULAR EL MAXCOLUM
		public function CalcularMaxColum($cara)
		{
			$maxColum = null;
			foreach ($cara as $indice => $arreglo) {
				// $numProv = count($data[$prov]);
				if (isset($cara[$indice]))
					$tam = count($cara[$indice]);
				else
					$tam = 0;

				$maxColum = ($maxColum >= $tam) ? $maxColum : $tam;
			}

			$this->Numcuidades = $maxColum;
		}


		//Override
		public function ImprimirNacion()
		{
			//PRIMERA CARA 

			foreach ($this->ciudades as $pais => $data) {


				// ALGORITMO PARA LA CABECERA				   
				$html = '<center>
			<div class="container">
				<div class="col-lg-6">
				<table border=1 class="table table-striped table-bordered border border-secondary">
				<tr>';

				//CALCULO EL MAXIMO DE LAS COLUMAS DE LA MATRIZ
				$this->CalcularMaxColum($data);

				$tam = count($data);
				// TITULO DE LA TABLA
				$html .= ' <tr>  
						 <th colspan=" ' . $tam . '" bgcolor="#EC7063" class="text-center bg-success text-white"> ' . $this->GetNombPais() . '</th>
						 </tr>';

				// IMPRIMIR LA CABECERA
				foreach ($data as $prov => $arreglo)
					$html .= "<th> $prov </th>";

				// ALGORITMO PARA IMPRIMIR LA TABLA EN HTML 
				for ($f = 0; $f < $this->GetNumCuidades(); $f++) { // $max para recorrer hacia abajo
					$html .= '<tr>';
					foreach ($data as $c)
						$html .= (isset($c[$f])) ? '<td bgcolor="#D6FAF2">
					<a href="./ciudades.php?dato=' . $c[$f] . '">
					<img src="./img/bandera' . $c[$f] . '.png" width="80px"><br>' . $c[$f] . '</a> 
					</td>' : '<td bgcolor="#D6DEFA">&nbsp;</td>';
					$html .= '</tr>';
				}
			}
			$html .= "</tr>";
			$html .= "</table></div></div></center>";
			$html .= "<br> <br>";

			echo $html;
		}
	}
	?>
</body>

</html>