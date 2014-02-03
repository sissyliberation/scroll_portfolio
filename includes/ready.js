$(document).ready(function(){
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
});