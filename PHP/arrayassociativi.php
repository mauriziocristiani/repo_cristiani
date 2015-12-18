<?php
//array associativi
$dizionario=array("fish"=>"pesce", "snail"=>"lumaca"); 
  $dizionario["cat"]="gatto"; 
  $dizionario["dog"]="cane";
  $dizionario["bear"]="orso"; 
  $dizionario["snake"]="serpente";
  $dizionario["pig"]="maiale"; 
  $dizionario["horse"]="cavallo";
  asort($dizionario);
  //asort ordina gli ELEMENTI dell'array
  ksort($dizionario);
  //ksort ordina le CHIAVI dell'array
  //esistono anche arsort e krsort ovvero ordinano al contrario
foreach ($dizionario as $i=>$el){
echo $i ."-".$el . "<br>";
}
?>
