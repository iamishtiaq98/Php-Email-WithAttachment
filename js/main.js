function validateContact() {
	$( "#contactForm" ).validate({
		rules: {
			s_name: "required",
			s_email: {
				required: true,
				email: true
			},
			s_subject: "required",
			s_message: {
				required: true,
				minlength: 5
			},
			file: {
				required: true,
			}
		},
		messages: {
			s_name: "Please enter your name",
			s_email: "Please enter a valid email address",
			s_subject: "Please enter subject",
			s_message: "Please enter a message",
			file: "Please select at-least one file"
		},
	});
}
$(document).ready(function (e){
	$("#contactForm").on('submit',(function(e){
		e.preventDefault();
		
		var valid;	
		valid = validateContact();
		if(valid) {
			$.ajax({
				url: "mail-send.php",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success: function(result){
					document.querySelector("#mail-status").style.color = "#156434";
					$("#mail-status").html(result.response);
					
					if (result.msg == 'success') {
						$('#contactForm')[0].reset();
						document.querySelector("#mail-status").style.color = "#156434";
						document.querySelector("#mail-status").innerHTML = response.message;
					} else if(result.msg == 'error') {
						document.querySelector("#mail-status").style.color = "rgb(196, 18, 43)";
						document.querySelector("#mail-status").innerHTML = result.response;
					}
				}       
			});
		}
	}));
} );