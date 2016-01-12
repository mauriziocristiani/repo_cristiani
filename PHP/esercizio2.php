<html>
     <form method="post" >
      dammi due numero per calcolare  modulo 
      dividendo
     <input type="text" name="numero1"/>   
      divisore
     <input type="text" name="numero2"/>   
     <input type="submit" name="quadrato"/>  
     </form>  
</html>
<?php
	
function quadrato($a)
{
    return $a * $a;
    
}
	
function modulo($a,$b)
{
    return $a % $b;
    
}



if ((isset($_POST["numero1"])) ||  (isset($_POST["numero2"]))) {

   	$dividendo = $_POST["numero1"];
   	$divisore  = $_POST["numero2"];
    if ($divisore   >  0 ) {
    echo $risultato = modulo($dividendo,$divisore);
    }
}
?>








