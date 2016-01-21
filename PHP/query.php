connesione al db
<?php

//connessione  al db   host,nome utente password  dbda usare
$link =mysql_connect("a22docente","softuser","_s0ft*");

//esecuzione query
$query =mysql_query("select login,password from utente ");

//iterazione  sui  risultati 
while($record=mysql_fetch_assoc($query))
{
 echo $record['login']; 
}

?>

