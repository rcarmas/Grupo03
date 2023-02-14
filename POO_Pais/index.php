<?php
/*
  PAISES CUBOS _POO
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php
	 
	 include_once("POO/class.Nacion.php");
	 include_once("POO/class.Pais.php");	
	 include_once("POO/class.UEFA.php");			   
	 
	 $titulo = ["ECUADOR","ESTADOS UNIDOS","ARGENTINA","COLOMBIA"];
	 $organizaciones=["UEFA","CONCACAF","FIFA"];
	 
	 // INDICES NUMERICOS
	 $cantonesECU=array(array("QUITO","CAYAMBE","RUMIÑAHUI"),
	                         array("GUAYAQUIL","DAULE"),
	                         array("CUENCA","CHORDELEC"),
	                         array("MANTA","CHONE","JIPIJAPA","PUERTO LOPEZ","ROCAFUERTE","SUCRE"));
	 
	 
	 // INDICES ASOCIATIVOS
	 $ciudadesECU= array ('ECUADOR' => array('Pichincha' => array ($cantonesECU[0][0],$cantonesECU[0][1], $cantonesECU[0][2]),
										     'Guayas' => array ($cantonesECU[1][0],$cantonesECU[1][1]),
											 'Azuay' => array ($cantonesECU[2][0],$cantonesECU[2][1]),
											 'Manabi' => $cantonesECU[3],
					                         'Esmeraldas' => array ("ATACAMES","TONSUPA") ) );

	 $ciudadesUSA = array ('ESTADOS UNIDOS' =>array('NEW YORK' => ["BUFALO","ALBANY","TROY","NEW YORK"],
	 												'PENSILVANNIA' => ["FILALDEFIA","PISTBURG"],
		  											'FLORIDA' => ["MIAMI","ORLANDO","TAMPA","FORT LOUDARLE"],
		 											'COLORADO' =>["GOLDEN","AVON","DURANGO","COMMERCECITY","STERLING","PUEBLOWEST"]) );


	 $ciudadesCOL = array ('COLOMBIA' => array('ANTIOQUIA' => ["MEDELLIN","PASTO"],
	 											'ARAUCA' => ["RUMBA","BOGOTA","BARANQUILLA"] ));

	 $ciudadesARG = array ('ARGENTINA' =>array('BUENOS AIRES' => ["BUFALO","ALBANY","TROY","NEW YORK"],
											    'JUJUY' => ["FILALDEFIA","PISTBURG"],
												'LA PAMPA' => ["MIAMI","ORLANDO","TAMPA"]));

	 $ciudadesMEX = array ('MEXICO' =>array('ESTADO MEXICO' => ["DF","TULTEPEC","VALLE DE BRAVO"],
											    'JALISCO' => ["GUADALAJARA","ARANDAS"],
												'NUEVO LEON' => ["MONTERREY","JUAREZ","LINARES"]));

	 $ciudadesESP = array ('ESPAÑA' =>array('ANDALUCIA' => ["SEVILLA","MALAGA","CORDOBA"],
											    'MADRID' => ["MADRID"],
												'CATALUÑA' => ["BARCELONA","GIRONA"]));

     $ciudadesITA = array ('ITALIA' =>array('LOMBARDY' => ["MILAN","MANTOVA"],
											'ROMA' => ["ROMA","RIETI","VITERBO"],
											'CAMPANIA' => ["NAPOLES","AVELLINO","ROFRANO"]));

	 $ciudadesHOL = array ('HOLANDA' =>array('UTRECH' => ["UTRECH","AMERSFOOT"],
											'SEPTENTRIONAL' => ["AMSTERDAN","HAARLEM","ALKAMARR","DEN HELDER"],
											'NAPOLES' => ["LEEUWARDEN","HEERENVEEN"]));
	
	 $UEFA = array ('UEFA' =>array('AMERICA' => null,
								   'EUROPA' => ["ITALIA","ESPAÑA","HOLANDA"],
								   'AFRICA' => null,
								   'ASIA' => null,
								   'OCEANIA' => null));
	
	 
	$objECU = new Pais($titulo[0],$ciudadesECU);
	$objUSA = new Pais($titulo[1],$ciudadesUSA);
	$objARG = new Pais($titulo[2],$ciudadesARG);
	$objCOL = new Pais($titulo[3],$ciudadesCOL);
	$objUEFA = new UEFA('Real Madrid','Liverpool',$organizaciones[0],$UEFA);

//ECUADOR
for($i = 0;$i < count($objUEFA);$i++){
	$html='<h2>';
	$html .= $objUEFA->GetNombPais(). '</h2>';
	echo $html;
	
	// IMPRIME EL NUMERO DE CANTONES
	$cara = $objUEFA->GetCiudades();
	
	/*
	echo "<pre>";
    	print_r($cara);
	echo "</pre>";  
	*/
	
	$objUEFA->CalcularMaxColum($cara);
	echo "NUMERO DE PROVINCIAS: " . count($cara) . "<br>";
	echo "NUMERO DE CANTONES: " . $objUEFA->GetNumCuidades() . "<br>";	
	
	//IMPRIMIR LA TABLA DE DATOS
	$objUEFA->ImprimirNacion();
}

?>                    

	
</body>

</html>