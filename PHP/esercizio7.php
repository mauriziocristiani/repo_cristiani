<html>
     <form method="post" >
      calcolare valore telefono usato   <br/>   
      PRICE
     <input type="text" name="price"/>   <br/>   <br/>
      OPTIONAL
     <input type="text" name="optional"/> <br/>   <br/>
      ANNI  TELEFONO  
      <input type="text" name="anni"/> <br/>   <br/>
  
     <input type="submit" name="invio"/> 
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








