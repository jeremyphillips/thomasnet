$('#signUp').click( function(e){
	$('#overlay, #signupMod').fadeIn(100);
	e.preventDefault();
});

$('#refer').click( function(e){
	$('#overlay, #referMod').fadeIn(100);
	e.preventDefault();
});


$('.closeMod, #overlay').click( function(){
	$('#overlay, .modal').fadeOut(100);
});

$(document).keyup(function(e) {
	if (e.keyCode == 27) {
		$('#overlay, .modal').fadeOut(100);   
	}
});

$('#addFriend').click( function(e){
	var count=3;
	var friendForm = '<label>Friend 4<input type="text" name="f_name[' + count + ']" placeholder="Name"><input type="email" name="f_email[3]" placeholder="email address"></label>';
	$("#referral-form label:last").after(friendForm);
	count++;
	e.preventDefault();
});

/*
$("#signUpForm").submit(function() {

    	$("[required]").each(function(e){
        	if ($.trim($(this).val()).length == 0) {
        		//alert('Please fill in all fields');
            	return false;
        	}
        });

 });
*/


/* Form validation */

$(document).ready(function(){

/*	
    $("#signUpForm").validate ({
        rules: {
            y_name: "required",
            y_email: {
                    required: true,
                    email: true
                    },
            },
        messages: {
            y_name: "Please enter your name",
            y_email: "Please enter your email"
            }
    });

*/
    $("#referral-form").validate ({
        rules: {
                y_name: "required",
                y_email: {
                        required: true,
                        email: true
                    },
                f_name: "required",
                f_email: "required"    
            },
        messages: {
                y_name: "Please enter your name",
                y_email: "Please enter a valid email",
                f_name: "Please enter a friend's name",
                f_email: "Please enter a friend's email"
            }
    });

});


/* Crossbrowser placeholder text */

  if(!Modernizr.input.placeholder){

	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();
	$('[placeholder]').parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		}
	  })
	});

}
