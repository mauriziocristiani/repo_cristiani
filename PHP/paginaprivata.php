<?php
	include "autenticazione.php";
  session_start();
	

?>


<html>
<body>
    <?php  if(isLogged()) : ?>
           questa e' una pagina privata   <br /> <br />

			<a href="/html_css/PHP/logout.php">logout</a>			

    <?php else : ?>
           devi fare login per vedere questa pagina 
   
    <?php endif ?>



</body>
</html>

