<?php
$testo="";

if(isset($_POST["testo"])){
   
    $testo=$_POST["testo"];

    $testo_arr=explode(" ",$testo); 
    
     $numero=count($testo_arr); 
}
      $frequenzaparole=[];
      
     foreach($testo_arr as  $parola){
          if (isset($frequenzaparole[$parola])){
              $frequenzaparole[$parola]++; 
             } 
          else{  
              $frequenzaparole[$parola]=1;
              }   
     }

     arsort ($frequenzaparole);   // ordina array 
 
    foreach ($frequenzaparole as $chiaveparola => $numeroparole){     
              echo  $chiaveparola  . "="  . $numeroparole; 
              echo "<br />";  
  
     }  	
?>
