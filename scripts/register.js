$('document').ready(function () {
	/* handle form validation */
	$("#register-form").validate({
		rules:
		{
			user_name: {
				required: true,
				minlength: 3
			},
			user_password: {
				required: true,
				minlength: 8,
				maxlength: 15
			},
			user_linkedin: {
				required: true,
				url: true
			},
			cpassword: {
				required: true,
				equalTo: '#user_password'
			},
			email: {
				required: true,
				email: true
			},
			errorPlacement: function(error, element) {
				error.appendTo('#err');
			}
		},
		messages:
		{
			user_name: "please enter user name",
			user_password: {
				required: "please provide a password",
				minlength: "password at least have 8 characters"
			},
			email: "please enter a valid email address",
			user_linkedin: "please enter a valid url",
			cpassword: {
				required: "please retype your password",
				equalTo: "password doesn't match !"
			}
		},
		submitHandler: formHandler
	});
	function formHandler() {
		var data = $("#register-form").serialize();
		$.ajax({
			type: 'POST',
			url: 'userreg.php',
			data: data,
			beforeSend: function () {
				$("#error").fadeOut();
				$("#btn-submit").html('Sending ...');
			},
			success: function (response) {
				if (response == "registered") {
					$("#btn-submit").html(' Signing Up ...');
					setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("welcome.php"); }); ', 3000);
				} else if (response == "fail") {
					$("#error").fadeIn(1000, function () {
						$("#error").html('<div class="alert alert-danger" style="text-align: center"> Email already registered!</div>');
						$("#btn-submit").html('Create Account');
					});
				}else {
					
				}
			}
		});
		$.ajax({
			type: 'POST',
			url: 'createjson.php',
			data: data,
			beforeSend: function () {
				$("#error").fadeOut();
				$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success: function (response) {
				if (response == "registered") {
					$("#btn-submit").html(' Signing Up ...');
					setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("welcome.php"); }); ', 3000);
				} else if (response == "fail") {
					$("#error").fadeIn(1000, function () {
						$("#error").html('<div class="alert alert-danger" style="text-align: center"> Email already registered!</div>');
						$("#btn-submit").html('Create Account');
					});
				}else {
					
				}
			}
		});
		return false;
	}
});
