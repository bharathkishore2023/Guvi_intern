$('document').ready(function () {
	/* handle form validation */
	$("#register-form").validate({
		rules:
		{
			user_name: {
				required: true,
				minlength: 3
			},
			password: {
				required: true,
				minlength: 8,
				maxlength: 15
			},
			cpassword: {
				required: true,
				equalTo: '#password'
			},
			user_email: {
				required: true,
				email: true
			},
		},
		messages:
		{
			user_name: "please enter user name",
			password: {
				required: "please provide a password",
				minlength: "password at least have 8 characters"
			},
			user_email: "please enter a valid email address",
			cpassword: {
				required: "please retype your password",
				equalTo: "password doesn't match !"
			}
		},
		submitHandler: submitForm
	});
	/* handle form submit */
	function submitForm() {
		var data = $("#register-form").serialize();
		$.ajax({
			type: 'POST',
			url: '/userreg.php',
			data: data,
			beforeSend: function () {
				$("#error_mess").fadeOut();
				$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success: function (response) {
				if (response == 1) {
					$("#error_mess").fadeIn(1000, function () {
						$("#error_mess").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
						$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
					});
				} else {
					$("#btn-submit").html('Signing Up ...');
					setTimeout('$(".registerform-ajax").fadeOut(500, function(){ $(".reg-form").load("/welcome.php"); }); ', 3000);
				}
			}
		});
		$.ajax({
			type: 'POST',
			url: 'createjson.php',
			data: data,
			beforeSend: function () {
				$("#error_mess").fadeOut();
				$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success: function (response) {
				if (response == 1) {
					$("#error_mess").fadeIn(1000, function () {
						$("#error_mess").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
						$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
					});
				} else {
					$("#btn-submit").html('Signing Up ...');
					setTimeout('$(".registerform-ajax").fadeOut(500, function(){ $(".reg-form").load("/welcome.php"); }); ', 3000);
				}
			}
		});
		return false;
	}
});
