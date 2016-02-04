// aspetto la pagina sia finita di caricare e leggo tag <p></p>

$().ready(function(){
    var listItem =$('li');
    
for (var i=0;i<listItem.length; i++){
	var elem =listItem.eq(i);
	if (elem.is('.special')){
		elem.removeClass('special');
		elem.addClass('bomba');
				
		}
		
	}





 //   var first =listItem[0];
  //  first.remove();
     
 //   var first =listItem.eq(0);
 //   first.remove();
    
	//var listItem =$(document.body.children[0]);
	//console.log(listItem);

	
	
});


