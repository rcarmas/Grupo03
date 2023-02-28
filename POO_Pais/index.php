<?php
/*
  PAISES CUBOS _POO
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Confederaciones</title>
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

	$year = rand(2018, 2022);
	
	$objUEFA = new UEFA($year, $champions[$year][0], $champions[$year][1], $organizaciones[0], $PaisesUEFA);
	$objCONCACAF = new CONCACAF($year, $concacaf_champions[$year][0], $concacaf_champions[$year][1], $organizaciones[1], $PaisesCONCACAF);
	$objFIFA = new FIFA($year, $mundial_clubes[$year][0], $mundial_clubes[$year][1], $organizaciones[2], $PaisesFIFA);

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