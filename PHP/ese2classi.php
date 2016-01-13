<html>
     <form method="post" >
      Dammi un numero  se maggiore di zero e fai il modulo
     <input type="text" name="numero1"/>   <br /> 
      dammi un secondo numero da  sommare al primo
      <input type="text" name="numero2"/>   <br/>   <br/> 

      calcolare il prezzo piu iva   <br/> 
      prezzo
     <input type="text" name="prezzo"/>  <br/> <br/>  
     tasso
     <input type="text" name="tasso"/  <br/> 

      <input type="submit" name="classi"/>  
     </form>  
</html>

   
<?php	
// prova con classi	
class Numero
{
	public $n;

	public  function __construct($numero)
  {
   	$this->n = $numero;
   }


 public function  modulo()
   {
     	if ($this->n < 0)   {
       return -1 * $this->n; 
   }
   return $this->n; 
}

 public function  somma($b)
   {
     	$risultato =$this->n + $b;
      return $risultato; 
   }

public function  quadrato()
   {
     	$risultato =$this->n * $this->n;
      return $risultato; 
   }

function iva($tasso)
{
  $risultato = $this->n+($this->n*$tasso)/100;
return $risultato;
    
}



 }



$a  =  new Numero($_POST["numero1"]);
echo "=================================";
echo "<br>";
echo "numero1 segno contrario = ";
echo   $a->modulo();
echo "<br>" ;
echo "================================="; 
echo "<br>";
echo "sommatoria numero1 e numero2 = ";
echo   $a->somma($_POST["numero2"]); 
echo "<br>";
echo "================================="; 
echo "<br>";
echo "numero1 elevato al quadrato = ";
echo   $a->quadrato();
echo "<br>";
echo "=================================";
echo "<br>";
echo "prezzo con iva = ";
$prezzo = new Numero($_POST["prezzo"]);
echo  $prezzo->iva($_POST["tasso"]);
echo "<br>"; 
echo "=================================";

// $prezzo = new Numero($_POST["tasso"]);






?>
