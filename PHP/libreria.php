<?php
function ribaltastringa ($nome){
  $r="";
  for($i=strlen($nome)-1 ;$i>=0 ;$i--){

     $r=$r.$nome[$i];
}
  return $r;
}
?>
