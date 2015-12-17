<html>

<body>

    <form   method="post">
            <p>nome</p>
            <input name="nome"      type="text" /> 
            <p>cognome</p>
             <input name="cognome"   type="text" />
						<p>indirizzo</p> 
            <input name="indirizzo" type="text" />  
            <p>telefono</p> 
             <input name="telefono"  type="text" /> 
             
             <input type="submit"    value="INVIO"  />  
   </form>

</html>
<?php    include"libreria_classi.php";   

         if  (isset($_POST["nome"])      &&
				      isset($_POST["cognome"])   &&
              isset($_POST["indirizzo"]) &&
              isset($_POST["telefono"])){
							$indirizzo= new Indirizzo();
              $indirizzo->nome=$_POST["nome"];
 							$indirizzo->cognome=$_POST["cognome"];
              $indirizzo->indirizzo=$_POST["indirizzo"];
							$indirizzo->telefono=$_POST["telefono"];


              // echo $indirizzo->nome;
              // echo $indirizzo->cognome;
  						// echo $indirizzo->indirizzo;
              // echo $indirizzo->telefono;
    
               echo $indirizzo->visualizza();
							
							}

?>







</body>
