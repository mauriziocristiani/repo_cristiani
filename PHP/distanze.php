

<?php
include "database_distanze.php";

$listapartenza=array_keys($distanze);
$listadestinazione=array();


$partenza="";
if 	(isset($_GET["partenza"])){
    if (isset($distanze[$_GET["partenza"] ])){
					$partenza=$_GET["partenza"];
    	 //trova le citta di destinazione in base alla citta di partenza 
   			 $listadestinazione=array_keys($distanze[$partenza]);
				}
}


$destinazione="";
if 	(isset($_GET["destinazione"])){
    if (isset($distanze[$partenza] [$_GET["destinazione"]])){
					$destinazione=$_GET["destinazione"];
      	}
}
//  contiene   la distanza  in km
$distanza="sconosciuta";
If ($partenza  != "" &&  $destinazione !=""){
   //  le citta di destinazione e di partenza sono valide 
   $distanza=$distanze[$partenza][$destinazione];
}

?>

<html>
<body>
<form   method="get">
            
			<?php if ($partenza =="") : ?>
                 Selezione citta di partenza
       					<select   name="partenza">
       			    <?php  foreach($listapartenza as  $c) : ?>
    	 					      <option value="<?php echo $c; ?>">
       					      <?php echo   $c; ?>
    			   		      </option >
       			    <?php  endforeach;?>
								</select>
			<?php else : ?>
                citta' di partenza: <?php echo $partenza; ?> 
                <br/>      
                <input  type="hidden"  
                        value="<?php echo $partenza; ?>"
                        name="partenza"
                 ></input>
	  	<?php endif ?>



      <?php if ($partenza !=="" && $destinazione=="") : ?>
             Seleziona citta di destinazione
						<select   name="destinazione">
           					<?php  foreach($listadestinazione as  $c) : ?>
             				<option value="<?php echo $c; ?>">
             								<?php echo   $c; ?>
            				 </option >
 					          <?php  endforeach;?>
			      </select>
			<?php endif ?>

<input type="submit" value="Next"></input>

</form>

la distanza tra  <?php echo $partenza; ?>  
             e   <?php echo $destinazione; ?> 
         e' di   <?php echo $distanza; ?>  Km

</body>
</html>




