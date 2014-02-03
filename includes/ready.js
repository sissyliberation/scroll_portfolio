$(document).ready(function(){
	var visited_tree = false;
	$('.contactFormBtn').on("click",function(){
		if( $('.contactFormBtn input [name="name"]').val()=="" ||
			$('.contactFormBtn input [name="email"]').val()=="" ||
			$('.contactFormBtn textarea [name="message"]').val()=="" ) {
			alert("Please fill out the form completely");
		}
		else {
			$(this).closest('form').submit();
		}
	});
	 $(".main").onepage_scroll({
    afterMove: function(index) {
    	if(index==2) {
    		setTimeout(function(){
    			addToDepth(1);
    			addToBreadth(1);
    			setTimeout(function(){
    				addToDepth(1);
    				addToDepth(1);
    				addToBreadth(1);
    			},200);
    		},200);
    		
    	}
    	if(index==3) {
    		setTimeout(function(){
    			newGraph(nodes+1);
    			setTimeout(function(){
    				newGraph(nodes+1);
    				setTimeout(function(){
    					newGraph(nodes+1);
    				},200);
    			},200);
    		},200);
    		
    	}
     
    }
  });
});