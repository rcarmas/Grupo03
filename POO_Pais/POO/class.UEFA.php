
<?php
class UEFA extends Pais{
		
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

  
 

} 






?>