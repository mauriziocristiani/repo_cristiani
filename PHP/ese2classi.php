<html>
   
<h1>     esercizi  PHP   con gestione classi  </h1>

 <form method="post" >
   
     <!--h3>      Dammi un numero  se maggiore di zero   </h3>
     <input type="text" name="numero1"/>  
     <button name="subject" type="submit" value="modulo">MODULO</button>  
     <button name="subject" type="submit" value="quadrato">QUADRATO</button>  
     
     <h3> dammi un secondo numero da  sommare al primo </h3>
      <input type="text" name="numero2"/>   
      <button name="subject" type="submit" value="addizione">SOMMATORIA</button>  
     <h3>     calcolare il prezzo piu iva   </h3>
   
     <input type="text" name="numero1"/> 
     <input type="text" name="prezzo"/>  
    
     <label for="tasso">Tasso</label>
     <input type="text" name="tasso"/  <br/ --> 
     
   
  
     <h1>     Gestione dinamica di 2 variabili  </h1>

     <label for="num1">Num1</label>
     <input type="text" name="num1"/> 
  

		 <select name="operazione">
  		<option value="modulo">Modulo</option>
  		<option value="quadrato">Quadrato</option>
  		<option value="addizione">Addizione</option>
  		<option value="tasso">Tasso</option>
		</select>

     
     <label for="num2">Num2</label>
     <input type="text" name="num2"/>      
     <button name="subject" type="submit" value="applica tasso">APPLICA</button>  
   <h3>    Risultati  elaborazioni  </h3>

     </form>  
 
</html>

   
<?php	
// prova con classi	

include "libreria_classi.php";

$a  =  new Numero($_POST["num1"]);

if (isset($_POST["operazione"])) {
		if ($_POST["operazione"] == "modulo") {
       
    	  echo "=================================";
 				echo "<br>";
        echo "modulo = " . $a->modulo();
				echo "<br>";
				echo "<br>" ;
		}
  	if ($_POST["operazione"] == "quadrato") {
    	  echo "================================="; 
				echo "<br>";
				echo "elevato al quadrato = ";
				echo   $a->quadrato();
				echo "<br>";
		}

		if ($_POST["operazione"] == "addizione") {
    	  echo "================================="; 
				echo "<br>";
				echo "sommatoria  = ";
				echo   $a->somma($_POST["num2"]); 
				echo "<br>";

		}

		if ($_POST["operazione"] == "tasso") {
				echo "=================================";
				echo "<br>";
				echo "prezzo con iva = ";

				echo  $a->iva($_POST["num2"]);
				echo "<br>"; 
				echo "=================================";
    	 
		}

}

?>
