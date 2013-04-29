$('#signUp').click( function(e){
	$('#overlay, #signupMod').fadeIn(100);
	e.preventDefault();
});

$('#refer').click( function(e){
	$('#overlay, #referMod').fadeIn(100);
	e.preventDefault();
});


$('.closeModal, #overlay').click( function(){
	$('#overlay, .modal').fadeOut(100);
});

$(document).keyup(function(e) {
	if (e.keyCode == 27) {
		$('#overlay, .modal').fadeOut(100);   
	}
});


