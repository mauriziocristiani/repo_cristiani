<?php
	include "autenticazione.php";
  session_start();
  $errore=false; 


					if (isset($_POST["user"])  && isset ($_POST["password"])	 
						&& $_POST["user"] != ""  &&  $_POST["password"] != ""){
					
           		if (verifica($_POST["user"],$_POST["password"])){
								  
                  $_SESSION["login_user"]=$_POST["user"];
							}
							else{
									 $errore=true; 

							}	
							 
					}	
		
					if(isLogged()){header("location:/html_css/PHP/paginaprivata.php"); 
						           	};
					
							 

?>


<html>
<body>
    <?php  if(isLogged()) : ?>
           Buongiorno
    <?php else : ?>

 				<form  method="post"  style="background-color:104EFF;
                                    border:2px solid red; 
																		width:470px;height:400px; 
																		padding:15px; 
																		margin-top:20px;
																		margin-left:200px">
              <p>USER</p> 
							<input        name="user"  type="text"
                            style="width:90%; margin-top:5px; 
                                   border:2px solid red;
                                   background-color:yellow;"     
								</input>  <br \>	
  
              <p>PASSWORD</p> 
							<input        name="password"    type="password" 
														style="width:90%;  margin-top:5px; 
														     	border:2px solid red;
																	background-color:yellow;" 
							</input>
	
   						<input 				type="submit"  value="login"  
			               				style="width:90%;margin-top:50px;
														border: 2px solid red; 
														background-color:yellow;" 
								 		
							</input>
     		</form>
 				 <?php  if($errore) : ?>
        	       username  e password errati
    		 <?php endif ?>




     <?php endif ?>




</body>
</html>
