<html>
     <form method="post" >
      calcolare il prezzo piu iva  <br/>   <br/>
      prezzo	
     <input type="text" name="prezzo"/>   
     tasso
     <input type="text" name="tasso"/>   
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
function iva($a,$b)
{
  $risultato = $a +(($a*$b)/100);
return $risultato;
    
}


if ((isset($_POST["prezzo"])) ||  (isset($_POST["tasso"]))) {

   	$prezzo = $_POST["prezzo"];
   	$tasso  = $_POST["tasso"];
    echo $risultato = iva($prezzo,$tasso);

   

}
?>








