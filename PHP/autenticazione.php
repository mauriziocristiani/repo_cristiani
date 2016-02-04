<?php
			function verifica($user,$pass){
               $utenti=array(
											 array("mauri","6e6bc4e49dd477ebc98ef4046c067b5f"),
											 array("ciro2","traca"),										
 											 ) ;
							 foreach($utenti as $u){
										  if($user == $u[0] && md5($pass) ==  $u[1]  ){
                         return true;
												}    
							}
	

      			   return false; 
			}

	function isLogged(){
	 					if (isset  ($_SESSION['login_user'])
				 					&&	  $_SESSION['login_user'] !=""){
           			        return true;
 
          			}
						else{
      			   					return false;
								} 
			}

?>


