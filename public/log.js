$('document').ready(function () {
	$('#reg_form_ajax').validate({
		rules:
		{
			user_name: {
				required: true,
				minlength: 3
			},
			password: {
				required: true,
				minlength: 6,
				maxlength: 12
			},
			cpassword: {
				required: true,
				minlength: 6,
				equalTo: '#password'
			},
			user_email: {
				required: true,
				user_email: true
			}
		},
		messages:
		{
			user_name: {
				required: "Please enter a username",
				minlength: "Your user_name must consist of at least 6 characters"
			},
			user_email: 'please enter a valid email address',
			linkedin: {
				url: "Please enter valid url"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your user_password must be at least 6 characters long"
			},
			cpassword: {
				required: "Please provide a password",
				minlength: "Your user_password must be at least 6 characters long",
				equalTo: "Please enter the same password as above"
			},
		},
		submitHandler: submitForm
	});
	function submitForm() {
		var data = $('#reg_form_ajax').serialize();
		$.ajax({
			type: 'POST',
			url: 'reg_user.php',
			data: data,
			beforeSend: function () {
				$('#error_mess').fadeOut();
				$('#form_btn_submit').html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; snding ...');
			},
			success: function (response) {
				if (response == 1) {
					$("#error_mess").fadeIn(1000, function () {
						$("#error_mess").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
						$("#form_btn_submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
					});
				} else {
					$('#form_btn_submit').html('<div class="login-row donroo row no-margin">Submitting Form..</div>');
					setTimeout('$(".registerform_ajax").fadeOut(500, function(){ $(".reg_form").load("../Templates/sucessfulregister.php"); }); ', 3000);
				}
			}
		});
		$.ajax({
			type: 'POST',
			url: 'createjson.php',
			data: data,
			beforeSend: function () {
				$('#error_mess').fadeOut();
				$('#form_btn_submit').html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sendinng ...');
			},
			success: function (response) {
				if (response == 1) {
					$("#error_mess").fadeIn(1000, function () {
						$("#error_mess").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
						$("#form_btn_submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
					});
				} else {
					$('#form_btn_submit').html('<div class="login-row donroo row no-margin">Submitting Form..</div>');
					setTimeout('$(".registerform_ajax").fadeOut(500, function(){ $(".reg_form").load("../Templates/sucessfulregister.php"); }); ', 3000);
				}
			}
		});
		return false;
	}
});