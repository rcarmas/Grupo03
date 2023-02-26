<?php
/*
  PAISES CUBOS _POO
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>

	<?php

	include_once("cubo.php");
	include_once("POO/class.Nacion.php");
	include_once("POO/class.Pais.php");
	include_once("POO/class.UEFA.php");
	include_once("POO/class.CONCACAF.php");
	include_once("POO/class.FIFA.php");

	$titulo = ["ECUADOR", "ESTADOS UNIDOS", "ARGENTINA", "COLOMBIA"];
	$organizaciones = ["UEFA", "CONCACAF", "FIFA"];

	// INDICES NUMERICOS


	$objECU = new Pais($titulo[0], $ciudadesECU);
	$objUSA = new Pais($titulo[1], $ciudadesUSA);
	$objARG = new Pais($titulo[2], $ciudadesARG);
	$objCOL = new Pais($titulo[3], $ciudadesCOL);
	$objUEFA = new UEFA('Real Madrid', 'Liverpool', $organizaciones[0], $PaisesUEFA);
	$objCONCACAF = new CONCACAF('Seattle Sounders', 'Pumas', $organizaciones[1], $PaisesCONCACAF);
	$objFIFA = new FIFA('Real Madrid', 'Al Hilal', $organizaciones[2], $PaisesFIFA);

	$ArrayObj = [$objUEFA, $objCONCACAF, $objFIFA];


	//ECUADOR
	for ($i = 0; $i < count($ArrayObj); $i++) {
		$html = '<h2>';
		$html .= $ArrayObj[$i]->GetNombPais() . '</h2>';
		echo $html;

		// IMPRIME EL NUMERO DE CANTONES
		$cara = $ArrayObj[$i]->GetCiudades();

		/*
	echo "<pre>";
    	print_r($cara);
	echo "</pre>";  
	*/

		$ArrayObj[$i]->CalcularMaxColum($cara);
		//echo "NUMERO DE PROVINCIAS: " . count($cara) . "<br>";
		//echo "NUMERO DE CANTONES: " . $objOrganizaciones[$i]->GetNumCuidades() . "<br>";	

		//IMPRIMIR LA TABLA DE DATOS
		$ArrayObj[$i]->imprimirONG();
		$ArrayObj[$i]->ImprimirNacion();
	}

	?>


</body>

</html>