<html>
<form>
 <form method="post" >
     <input type="text" name="cibo"/>   
     <input type="submit" name="cerca"/>  
     </form> 

</form>

</html>


<?php

include "databasecibi.php";

if (isset($_GET["cibo"])){

   foreach($cibieingredienti  as  $cibo  =>  $ingr){
        
        $posizione=strpos($cibieingredienti,$ingr); 
    
    if ($posizione > -1) {
      	 echo $cibo;
      	} 
 } 
?>
