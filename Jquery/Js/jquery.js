$(document).ready(function(){
	

	$( "#color" ).click(function() {
		$( ".box1" ).each(function( index, element ) {
				    // element == this
				    if(index%2==0){
				    	$( element ).css( "backgroundColor", "black" );
				    }else{
				    	$( element ).css( "backgroundColor", "white" );
				    }
				});
		
	});
	var smallDiv = '<div class="box1"></div>';	



	function addDiv() {
		$('#container').append(smallDiv);
	}

	$("#col").click(function() {
		var  num= $('#numberbox').val();	
		var iNum = parseInt(num)
		console.log(iNum);
		for (i = 0; i <= iNum; i++){
			addDiv();
		}
		$(".box1").css({ "width": "100px","height": "100px","margin": "5px","float": "left","border": "1px gray solid","text-align": "center"});
			 $(".box1").click(function() {  //use a class, since your ID gets mangled
			 		if($(this).hasClass('active')){
			 				alert("đã click");
			 		}else{
			 		$(this).addClass("active"); 
			 		}
			 
			 });

	});

});

