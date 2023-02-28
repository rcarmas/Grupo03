
<?php
	abstract class Nacion{
		private $NombrePais;   
		private $NumProv;      
		
		
	    
		//CONSTRUCTOR
	function __construct($Nomb,$num){
		$this->NombrePais = $Nomb;
		$this->NumProv=$num;
	}
		
	// METODOS ABSTRACTOS	
      public abstract function ImprimirNacion();
	  
	    
	// METODOS
	   public function GetNombPais(){
		   return $this->NombrePais;
	   }
	
	
	   public function GetNumProv(){
		   return $this->NumProv;
	   }
	   
	   
	   
	}
?>