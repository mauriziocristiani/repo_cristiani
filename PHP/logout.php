<?php
			 session_start();
       $nomeutente="non hai una sessione attiva";	
			 if (isset  ($_SESSION['login_user'])
				 		&&		 $_SESSION['login_user'] !=""){
           				$nomeutente=$_SESSION['login_user'];
          
				}

		  if (isset($_POST["logout"])){
		      session_destroy();
			}	 

			
?>


<html>
<body>
     buongiorno  <?php echo $nomeutente ?>	


		<form  method="post">
						
						<input type="submit"  name="logout"  value="logout"  </input>
     
			</form">
</body>
</html>
