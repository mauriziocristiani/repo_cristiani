connesione al db
<?php 
//Connessione al DB
$link = mysql_connect("a22docente", "softuser", "_s0ft*");
mysql_select_db("fanqook");

//Esecuzione query
$query = mysql_query("SELECT ". 
                      " date_format(dataora,'%e/%m/%Y %T') AS dataora,". 
                      " utente.login,titolo ". 
                      " FROM post join  utente on   post.utente = utente.id". 
                      " ORDER BY post.dataora DESC LIMIT 10" );

echo "<table border=1>\n";

echo "<tr><TH>data e ora </TH><TH>utente</TH><TH>Titolo</TH></tr>\n";


//* iterazione dei record
while ($record = mysql_fetch_assoc($query)){

	echo "<tr>";
  echo "<td>".$record["dataora"]."</td>";	
  echo "<td>".$record["login"]."</td>";
  echo "<td>".$record["titolo"]."</td>";
	echo "</tr>";
}
echo "</table>\n";

//CONntrollo se l'utente ha inviato la form
IF (isset($_REQUEST["azione"])){

//CONntrollo se la form   e' l'invio di un form
IF($_REQUEST["azione"]=="invia")
   {
     mysql_query("INSERT into post(utente,titolo,testo) 
                  values (".$_REQUEST["id_utente"].",".           
              						"'".$_REQUEST["titolo"]."',".
               						"'".$_REQUEST["post"]."'".
 													")");
	echo  mysql_error();
    
		}

}




//form per invio form 
echo "<form  method='post'>";

//menu' a tendina
echo "<select  name='id_utente'>";

$query = mysql_query("SELECT id,login FROM utente");

while ($record = mysql_fetch_assoc($query))
      {
       echo "<option value='".$record["id"]."'>";
       echo $record["login"];
       echo "</option>\n";
      }

echo "</select>\n";
//casella di testo per il titolo 
echo "<input type='text' name='titolo'/>\n";

//area  di testo  
echo "<textarea name='post' cols=80 row=20></textarea>\n";

//tasto submit
echo "<input type='submit' name='azione' value='invia'/>\n";

echo "</form>";


?>

