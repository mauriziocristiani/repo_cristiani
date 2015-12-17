
<?
// file libreria classi php
	class Indirizzo {
             	public $nome;
              public $cognome; 
 	            public $indirizzo;
              public $telefono; 

        			public  function nomeCompleto(){
							        $n=$this->nome . " " .  $this->cognome;
                      return $n; 
						  }              
            
							public  function visualizza(){
							        $n=$this->nomeCompleto();
                      $n=$n."<br/>"; 
											$n=$n. $this->indirizzo;
  										$n=$n."<br/>"; 
											$n=$n. $this->telefono;

                      return $n; 
                          	

							}
}


	class IndirizzoEsteso extends  Indirizzo {
             	public $ncellulare;
							
							public  function visualizza(){
							$n=parent::visualizza();
              $n=$n .  "</br>N. cellulare : " .$this->ncellulare;
   						return $n;

							}

}              
            
					


?>
