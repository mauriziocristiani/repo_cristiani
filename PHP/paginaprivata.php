<?php
	include "autenticazione.php";
  session_start();
	

?>


<html>
<body>
    <?php  if(isLogged()) : ?>
           questa e' una pagina privata
    <?php else : ?>
           devi fare login per vedere questa pa<gina 
   
    <?php endif ?>



</body>
</html>

