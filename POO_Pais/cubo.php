<?php
	$cantonesECU = array(
		array("QUITO", "CAYAMBE", "RUMIÑAHUI"),
		array("GUAYAQUIL", "DAULE"),
		array("CUENCA", "CHORDELEC"),
		array("MANTA", "CHONE", "JIPIJAPA", "PUERTO LOPEZ", "ROCAFUERTE", "SUCRE")
	);


	// INDICES ASOCIATIVOS
	$ciudadesECU = array(
		'Pichincha' => array($cantonesECU[0][0], $cantonesECU[0][1], $cantonesECU[0][2]),
		'Guayas' => array($cantonesECU[1][0], $cantonesECU[1][1]),
		'Azuay' => array($cantonesECU[2][0], $cantonesECU[2][1]),
		'Manabi' => $cantonesECU[3],
		'Esmeraldas' => array("ATACAMES", "TONSUPA")
	);


	$ciudadesUSA = array(
		'NEW YORK' => ["BUFALO", "ALBANY", "TROY", "NEW YORK"],
		'PENSILVANNIA' => ["FILALDEFIA", "PISTBURG"],
		'FLORIDA' => ["MIAMI", "ORLANDO", "TAMPA", "FORT LOUDARLE"],
		'COLORADO' => ["GOLDEN", "AVON", "DURANGO", "COMMERCECITY", "STERLING", "PUEBLOWEST"]
	);

	$ciudadesCOL = array(
		'ANTIOQUIA' => ["MEDELLIN", "PASTO"],
		'ARAUCA' => ["RUMBA", "BOGOTA", "BARANQUILLA"]
	);

	$ciudadesARG = array(
		'BUENOS AIRES' => ["BUFALO", "ALBANY", "TROY", "NEW YORK"],
		'JUJUY' => ["FILALDEFIA", "PISTBURG"],
		'LA PAMPA' => ["MIAMI", "ORLANDO", "TAMPA"]
	);

	$ciudadesMEX = array(
		'ESTADO MEXICO' => ["DF", "TULTEPEC", "VALLE DE BRAVO"],
		'JALISCO' => ["GUADALAJARA", "ARANDAS"],
		'NUEVO LEON' => ["MONTERREY", "JUAREZ", "LINARES"]
	);

	$ciudadesESP = array(
		'ANDALUCIA' => ["SEVILLA", "MALAGA", "CORDOBA"],
		'MADRID' => ["MADRID"],
		'CATALUÑA' => ["BARCELONA", "GIRONA"]
	);

	$ciudadesITA = array(
		'LOMBARDY' => ["MILAN", "MANTOVA"],
		'ROMA' => ["ROMA", "RIETI", "VITERBO"],
		'CAMPANIA' => ["NAPOLES", "AVELLINO", "ROFRANO"]
	);

	$ciudadesHOL = array(
		'UTRECH' => ["UTRECH", "AMERSFOOT"],
		'SEPTENTRIONAL' => ["AMSTERDAN", "HAARLEM", "ALKAMARR", "DEN HELDER"],
		'NAPOLES' => ["LEEUWARDEN", "HEERENVEEN"]
	);

	$PaisesUEFA = array('UEFA' => array(
		'AMERICA' => null,
		'EUROPA' => ["ITALIA", "ESPAÑA", "HOLANDA"],
		'AFRICA' => null,
		'ASIA' => null,
		'OCEANIA' => null
	));

	$PaisesCONCACAF = array('CONCACAF' => array(
		'AMERICA' => ["USA", "MEXICO"],
		'EUROPA' => null,
		'AFRICA' => null,
		'ASIA' => null,
		'OCEANIA' => null
	));

	$PaisesFIFA = array('MUNDIAL CLUBES' => array(
		'AMERICA' => ["USA", "BRASIL"],
		'EUROPA' => ["ESPAÑA"],
		'AFRICA' => ["MARRUECOS", "EGIPTO"],
		'ASIA' => ["ARABIA SAUDITA"],
		'OCEANIA' => ["AUSTRALIA"]
	));

	$ciudades = array(
		'ECUADOR' => $ciudadesECU,
		'USA' => $ciudadesUSA,
		'COLOMBIA' => $ciudadesCOL,
		'ARGENTINA' => $ciudadesARG,
		'MEXICO' => $ciudadesMEX,
		'ESPAÑA' => $ciudadesESP,
		'ITALIA' => $ciudadesITA,
		'HOLANDA' => $ciudadesHOL
	);


	$champions = array(
		"2018" => array("Real Madrid", "Liverpool"),
		"2019" => array("Liverpool", "Tottenham Hotspur"),
		"2020" => array("Bayern Munich", "Paris Saint-Germain"),
		"2021" => array("Chelsea", "Manchester City"),
		"2022" => array("Real Madrid", "Liverpool")
	);
	
	$concacaf_champions = array(
		"2018" => array("Chivas Guadalajara", "Toronto FC"),
		"2019" => array("Monterrey", "Tigres UANL"),
		"2020" => array("Los Angeles FC", "Club América"),
		"2021" => array("Monterrey", "Club América"),
		"2022" => array("Club León", "CF Pachuca")
	);

	$mundial_clubes = array(
		"2018" => array("Real Madrid", "Al Ain"),
		"2019" => array("Liverpool", "Flamengo"),
		"2020" => array("Bayern Munich", "Tigres UANL"),
		"2021" => array("Al Ahly", "Palmeiras"),
		"2022" => array("Bayern Munich", "Esperance de Tunis")
	);
