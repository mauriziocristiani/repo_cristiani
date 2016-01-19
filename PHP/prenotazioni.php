<?php
include "database_prenotazioni.php";
?>

<html>
<body>
			<table  width="25%" border="2px solid black" cellpaddind="10" callspacing="2">
						<?php  foreach($posti as  $postioccupati) : ?>
            	<tr>
									<?php  for($i=1; $i<=10; $i++) : ?>
                   <td> 
                       <?php  if(isset($postioccupati[$i])) : ?>
                           x
                        <?php else : ?>
                           -  
                        <?php endif ?>
 									 </td>
                  <?php  endfor; ?>

							</tr>
             				
          <?php  endforeach;?>
			</table>


</body>
</html>

