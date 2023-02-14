
<?php

include_once ('interface.Organizacion.php');

class CONCACAF extends Pais implements Organizacion{
		
    private $campeon;      // LA CARA
    private $subcampeon;   // Numero total de ciudades que tiene un pais
   
        
// CONSTRUCTOR
function __construct($campeon,$subcampeon,$NomPais,$data){
    parent::__construct($NomPais,$data);
    $tope=count($data);
    $this->campeon = $campeon;
    $this->subcampeon = $subcampeon;
    
}

// IMPLEMENTAR METODOS	
 
  
  public function GetCampeon(){
        return $this->campeon;
  } 
    
 
  public function GetSubcampeon(){
        return $this->subcampeon;     
  } 

  public function imprimirONG()
  {
    $html ='<p>El campeón de la LIGA DE CAMPEONES DE LA CONCACAF es: '. $this->campeon .'</p>';
    $html .='<p>El subcampeón de la LA LIGA DE CAMPEONES DE LA CONCACAF es: '. $this->subcampeon .'</p>';
    echo $html;
  }
 

} 

?>