$('#pressMe').click(function(){
		
		var ajaxOptions = {
			url: root+'/posts',
			method: 'GET'
			};
	
	     $.ajax(ajaxOptions).
			then(function(data){
							    for(var i=0; i<=10; i++ ){
	                                var row ="\
	                                <div class="list-group">\
	                                <a href= 								
									
									$('.container').append('<div>' + 
															data[i].userId + 
															data[i].id + 
															data[i].title + 
															data[i].body + 
															'</div>');	
														
									}
				
			
		 });
		
		
	}); 


});
	
	


