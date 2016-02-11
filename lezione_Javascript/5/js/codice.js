// aspetto la pagina sia finita di caricare e leggo tag <p></p>

$().ready(function(){
    $('input[type="email"]').keyup(function(){
		console.log($(this).val());
		
		$('#email').html($(this).val()).addClass("bg-danger");
		
		
	}) 
		
	
});








