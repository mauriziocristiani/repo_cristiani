<html>
     <form method="get" >
     <input type="text" name="cibo"/>   
     <input type="submit" name="cerca"/>  
     </form>  
</html>
<?php
	include "databasecibi.php";


	if (isset($_GET["cibo"])){

	$cibo=$_GET["cibo"];

	if (isset ($cibieingredienti[$cibo])) {
    
  	      echo $cibieingredienti[$cibo];	
	} else {
  	      echo $cibo .  "non esistente";  
          echo "<br />";   
  	      echo "$cibo    non esistente";     // doppio apice interpreta la variabile
  	      echo "<br />"; 
  	      echo '$cibo .  "non esistente';   //apice scrive cio che ce dentro  
  	    }
	}
?>
