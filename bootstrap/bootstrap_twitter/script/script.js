$(document).ready(function(){
	 console.log('ciao'); 

	$("#mytext").keyup(function(){
		 var max=140

		 var count = $('#mytext').val().length;
		 var lenght = max - count;
		  console.log(count);                                                        
		$('#counter').html(lenght); 
		if (count>0 || count<140)
			$('#mybutton').attr('disabled',false); 
		 console.log('ciao'); 
		 if (count==0 || count>140)
		 	$('#mybutton').attr('disabled',true);







	
		});

	$("#mybutton").click(function(){
		console.log('click');
		var mytext=$('#mytext').val(); 	
		console.log(mytext);
		$('#posts').prepend('<div class="post">'+mytext+'</div>');
	


		});	


    
});


