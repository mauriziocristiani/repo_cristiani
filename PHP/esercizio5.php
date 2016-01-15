<html>
     <form method="post" >
      scambio  di due spostare il valore di due variabili <br/>   <br/>
      variabile 1
     <input type="text" name="variabile1"/>   
      variabile 2
     <input type="text" name="variabile2"/>   
     <input type="submit" name="esercizio5"/>  
     </form>  
</html>
<?php
	
function quadrato($a){
    return $a * $a;
    
}
	
function modulo($a,$b){
    return $a % $b;
    
}
function iva($a,$b){
  $risultato = $a +(($a*$b)/100);
return $risultato;
    
}


   	$var1 = $_POST["variabile1"];
   	$var2 = $_POST["variabile2"];
	  $x = $var1;
   	$y = $var2;

    $var1=$y;
   	$var2=$x;
    
      
    echo  "var1 " . "=" . $var1 ; 
    echo  "<br>" ; 
    echo  "var2 " . "=" . $var2 ;

?>








