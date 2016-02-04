
<?php

$posti=array(
 					"fila1" => array(
          									1  =>  1, 
          									4  =>  1,
         							 			9  =>  1 
                            
          									),
					"fila2" => array(
          									5  =>  1, 
          									8  =>  1,
                            9  =>  1
      						          ),
					"fila3" => array(
          									8  =>  1, 
          									9  =>  1,
                            10 =>  1
      						          ),

          "fila4" => array(
          									1 =>  510, 
          									4 =>  640,
														5  =>  1, 
          									6  =>  1,
														6  =>  1,
                            10 =>  1
  								          )
);

?>



<?php
class Platea{
			private  $posti;
			private  $postifila;


			public   function __construct($p, $n){ 
 								$this->posti=$p; 
	              $this->postifila=$n; 
}
							
 			// restituisce un array con i nomi delle file
			public   function getFile(){
							 return array_keys($this->posti); 
			}

	// restituisce un array con i numeri dei posti presenti in platea
			public   function getPosti(){
               $n=array();
							 for($i=1; $i<= $this->postifila; $i++){
                   $n[]=$i;
							 }
 							 return $n;	
			}

// controlla se il posto specificato e prenotato
// ritorna intero
//     1  se il posto e prenotato   
//     0 se libero    
//     -1 se fila o numero posto invalidi 


			public   function isPrenotato($f, $p){
               //controlla se la fila e' valida 
               if (isset($this->posti[$f])){
								   if ($p >= 1  &&  $p <= $this->postifila){
											if (isset($this->posti[$f][$p])){
                          return 1;	
                      }
     					        else{
 							          return 0;	
							          }
                     }
     					   else{
 							      return -1;	
							     }
   							 }
               else{
 							     return -1;	
							 		}
			
  }
      

// prenota il post
// ritorna intero
//     1  se il posto e'  gia prenotato     
//     0 se libero se il p9osto e' prenotato con successo    
//   

	public   function prenota($f, $p){
           $prenotato=$this->isPrenotato($f,$p);   
           if ($prenotato == 0){
               $this->posti[$f][$p]=1;
               return 0; 	
						} 
	         else{
                return $prenotato;  
								}
	}


// prenota il post
// ritorna intero
//     1  se il posto e'  gia prenotato     
//     0 se libero se il posto e' prenotato con successo    
//   

	public   function libera($f, $p){
           $liberato=$this->isPrenotato($f,$p);   
           if ($liberato == 1){
               unset($this->posti[$f][$p]);
               return 0; 	
						} 
	         else{
                return $liberato;  
								}
	}










}

function queryCinema($n){


$posti=array(
 					"fila1" => array(
          									1  =>  1, 
          									4  =>  1,
         							 			9  =>  1 
                            
          									),
					"fila2" => array(
          									5  =>  1, 
          									8  =>  1,
                            9  =>  1
      						          ),
					"fila3" => array(
          									8  =>  1, 
          									9  =>  1,
                            10 =>  1
      						          ),

          "fila4" => array(
          									1 =>   1, 
          									4 =>   1,
														5  =>  1, 
          									6  =>  1,
														7  =>  1,
                            10 =>  1
  								          )
);

         return  new Platea($posti,$n); 
}





?>



