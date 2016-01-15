
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
  
class Numero
{
	private $n;

	public  function __construct($numero)
  {
   	$this->n = $numero;
   }


 public function  modulo()
   {
     	if ($this->n < 0)   {
       return -1 * $this->n; 
   }
   return $this->n; 
}

 public function  somma($b)
   {
     	$risultato =$this->n + $b;
      return $risultato; 
   }

public function  quadrato()
   {
     	$risultato =$this->n * $this->n;
      return $risultato; 
   }

function iva($tasso)
{
  $risultato = $this->n+($this->n*$tasso)/100;
return $risultato;
    
}



 }         
					


?>
