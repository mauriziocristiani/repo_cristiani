<html>
     <form method="post" >
      dammi un numero 
     <input type="text" name="numero1"/>   
     <input type="submit" name="quadrato"/>  
     </form>  
</html>
<?php
	
function quadrato($a)
{
    return $a * $a;
    
}
	if (isset($_POST["numero1"])){

   	$base = $_POST["numero1"];
    echo $risultato = quadrato($base);
   	}
?>








