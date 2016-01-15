<html>
     <form method="post" >
      definire valore di una equazione  <br/>
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
function equazione($a,$b)
{
    return $a % $b;
    
}






if ((isset($_POST["numero1"])) ||  (isset($_POST["numero2"]))) {

   	$a = $_POST["numero1"];
   	$b  = $_POST["numero2"];
    if ($a >     0 ) {
    echo $risultato = ($b/$a) * -1;    
}
}
?>








