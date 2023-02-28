
<?php

include_once('interface.Organizacion.php');

class CONCACAF extends Pais implements Organizacion
{

  private $campeon;      
  private $subcampeon;   

  // CONSTRUCTOR
  function __construct($anio, $campeon, $subcampeon, $NomPais, $data)
  {
    parent::__construct($NomPais, $data);
    $tope = count($data);
    $this->campeon = $campeon;
    $this->subcampeon = $subcampeon;
    $this->anio = $anio;
  }

  // IMPLEMENTAR METODOS	


  public function GetCampeon()
  {
    return $this->campeon;
  }

  public function GetSubcampeon()
  {
    return $this->subcampeon;
  }

  public function GetAnio()
  {
    return $this->anio;
  }

  public function imprimirONG()
  {
    $html = '<h5>Año: </h5>' . $this->anio . '
    <p>El campeón de la LIGA DE CAMPEONES DE LA CONCACAF es: ' . $this->campeon . '
    <br>El subcampeón de la LA LIGA DE CAMPEONES DE LA CONCACAF es: ' . $this->subcampeon . '</p>';
    echo $html;
  }
}

?>