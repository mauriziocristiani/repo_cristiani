<?php

//echo"hello word!!\n" . "<br/>" ;
//$v1="8.2";
//$v2=3;

//echo $v1+$v2;
//echo "ciao". $v2

// variabili con array

$lista=array ();

//push lo mette in cosa 
array_push($lista,"ciao");
array_push($lista,"42");

//mette il valore in testa 
array_unshift($lista,"hello");

echo $lista[1];
array_unshift($lista,"cavallo");
echo $lista[1] ;

//cancella l ultimo elemento ....  array_pop($lista) 
//echo array_pop($lista);

//questo comando prende il primo comando della lista e lo toglie  array_shift($lista) 
//echo array_shift($lista);

//per far vedere l elemento della lista alla posizione che noi segnamo
//$lista[3];
echo "<br>contenuto di tutto l'array<br>";

//imposto a 8 il valoreche voglio mettere quindi 8=andrea
$lista[8]="andrea";

//per fare un ciclo:
foreach ($lista as $el) {

echo $el;
echo "<br>";
}
echo "<br>";
//per vedere anche l indice si inserisce (i=indice)
foreach ($lista as $i=>$el) {

echo $i ."-".$el;
echo "<br>";
}
echo "<br>";



echo"l'array contiene "   .count($lista).  " elementi";

//ciclo for contiene 3 elementi separati dal ; for (...;...;...;){

for($i=0 ;$i<10 ;$i++){

//echo $i; =compaiono risultati da 0 a 9


?>	
