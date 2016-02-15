// aspetto la pagina sia finita di caricare e leggo tag <p></p>

$().ready(function(){
 
     var root = 'http://jsonplaceholder.typicode.com'; 
 
 
 
    $('#pressMe').click(function(){
		
		var ajaxOptions = {
			url: root+'/posts',
			method: 'GET'
			};
	
	     $.ajax(ajaxOptions).
			then(function(data){
				console.log(data)
		 });
	
				
	
		
		
	}); 
		
	
});








