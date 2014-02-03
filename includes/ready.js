$(document).ready(function(){
    var visited_graph = false;
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
            if(!visited_tree) {
                setTimeout(function(){
                    addToDepth(1);
                    addToBreadth(1);
                    setTimeout(function(){
                        addToDepth(1);
                        addToDepth(1);
                        addToBreadth(1);
                    },200);
                },100);
            }
    	}
    	if(index==3) {
            if(!visited_graph) {
                setTimeout(function(){
                    newGraph(nodes+1);
                    setTimeout(function(){
                        newGraph(nodes+1);
                        setTimeout(function(){
                            newGraph(nodes+1);
                            visited_graph = true;
                        },200);
                    },200);
                },100);
            }
    	}
    }
  });
});