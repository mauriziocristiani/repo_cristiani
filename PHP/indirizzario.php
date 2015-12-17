<html>

<body>

    <form   method="post"    style="background-color:104EFF; width 50 %; margin:auto  border:2px solid
                             black; paddind:5px; font-weight:900; color:FFEB00;text-align:center;  >
            <p>nome</p>
            <input name="nome"      type="text" style="border:2px solid black " /> 
            <p>cognome</p>
            <input name="cognome"   type="text" />
						<p>indirizzo</p> 
            <input name="indirizzo" type="text" />  
            <p>telefono</p> 
            <input name="telefono"  type="text" /> 
            <p>cellulare</p> 
            <input name="cellulare"  type="text" /> 
              <p>    </p> 
             <input type="submit"    value="INVIO"  />  
   </form>

</html>
<?php    include"libreria_classi.php";   

         if  (isset($_POST["nome"])      &&
				      isset($_POST["cognome"])   &&
              isset($_POST["indirizzo"]) &&
              isset($_POST["telefono"])){
							$indirizzo= new IndirizzoEsteso();
              $indirizzo->nome=$_POST["nome"];
 							$indirizzo->cognome=$_POST["cognome"];
              $indirizzo->indirizzo=$_POST["indirizzo"];
							$indirizzo->telefono=$_POST["telefono"];
							$indirizzo->ncellulare=$_POST["cellulare"];

              // echo $indirizzo->nome;
              // echo $indirizzo->cognome;
  						// echo $indirizzo->indirizzo;
              // echo $indirizzo->telefono;
    
               echo $indirizzo->visualizza();
							
							}

?>







</body>
