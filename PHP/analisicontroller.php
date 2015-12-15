<?php
$testo="";

if(isset($_POST["testo"])){
   
    $testo=$_POST["testo"];

    $parole_arr=explode(" ",$testo); 
    
     $numero=count($parole_arr); 
}

echo $numero;

?>
