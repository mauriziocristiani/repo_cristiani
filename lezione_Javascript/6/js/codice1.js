// aspetto la pagina sia finita di caricare e leggo tag <p>


	
	var listItemH1 = $("h1");
	
	var listItemH2 = $("h2");
	
	$("#toggle").click(function(){
	   if (listItemH1.is(".green"))
	   {
		  RemoveMe();
		}else{
			
		ColorMe();	
		ScriviMe();
			
			}	
		
	})
	
	

function ScriviMe(){
	
	var listItemH1 = $("h1");
	
	var listItemH2 = $("h2");

	listItemH2.html("ciao sono verde ");
	listItemH1.html("ciao sono rosso ");
		
		
	}	
		


function ColorMe(){
	
	var listItemH1 = $("h1");
	
	var listItemH2 = $("h2");

	listItemH2.addClass("red");
	listItemH1.addClass("green");		
		
	}

	
function RemoveMe(){
	var listItemH1 = $("h1");

	var listItemH2 = $("h2");

	listItemH2.removeClass("red");
	listItemH1.removeClass("green");
	
	}
		
	

function editText(){
	
	listItemH1.each(function(index,oldHtml){
		return "ciao sono verde "	
		});
	
	listItemH2.each(function(index,oldHtml){
		return "ciao sono rosso "	
		});
		
		
	}	




 //   var first =listItem[0];
  //  first.remove();
     
 //   var first =listItem.eq(0);
 //   first.remove();
    
	//var listItem =$(document.body.children[0]);
	//console.log(listItem);

	
	


