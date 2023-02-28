
<?php

include_once('interface.Organizacion.php');

class UEFA extends Pais implements Organizacion
{

  private $campeon;      // LA CARA
  private $subcampeon;
  private $anio;   // Numero total de ciudades que tiene un pais


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
    <p>El campeón de la UEFA CHAMPIONS LEAGUE es: ' . $this->campeon . '
    <br>El subcampeón de la UEFA CHAMPIONS LEAGUE es: ' . $this->subcampeon . '</p>';
    echo $html;
  }
}

?>