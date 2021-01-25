$('document').ready(function() {
	$('#reg_form_ajax').validate({
		rules: {
			user_name: {
				required: true,
				minlength: 3
            },
            linkedin:{
                required: false,
                url: true
            },
			user_password: {
				required: true,
				minlength: 6,
				maxlength: 12
            },
			cpassword: {
                required: true,
                minlength: 6,
				equalTo: '#user_password'
			},
			user_email: {
				required: true,
                user_email: true
                
			}
		},
		messages: {
			user_name:{
                required: "Please enter a user_name",
                minlength: "Your user_name must consist of at least 6 characters"
            },
            user_email: 'please enter a valid user_email address',
            linkedin: {
                url: "Please enter valid url"
            },
            user_password: {
                required: "Please provide a user_password",
                minlength: "Your user_password must be at least 6 characters long"
            },
            cpassword: {
                required: "Please provide a user_password",
                minlength: "Your user_password must be at least 6 characters long",
                equalTo: "Please enter the same user_password as above"
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
			beforeSend: function() {
				$('#error_mess').fadeOut();
				$('#form_btn_submit').html('<div class="login-row donroo row no-margin">Sending</div>');
			},
			success: function(response) {
				if (response == "OOPS!! register fail") {
					$('#error').fadeIn(1000, function() {
						$('#error_mess').html(
							'<div class="login-row donroo row no-margin alert alert-danger"><strong>user_email</strong>&nbsp; already exist!</div>'
						);
						$('#form_btn_submit').html('<div class="login-row btnroo row no-margin"><button class="btn btn-success btn-sm" name="create_acc" id="form_btn_submit">Create Account</button></div>');
					});
				} else if(response == 'Welcome you have been successfully registered') {
					$('#form_btn_submit').html('<div class="login-row donroo row no-margin">Submitting Form..</div>');
					setTimeout(
						'$(".registerform_ajax").fadeOut(600, function(){ $(".reg_form").load("../Templates/successfulregister.php"); }); ',
						3000
					);
				}else {
					$('#error_mess').fadeIn(1000, function() {
						$('#error_mess').html(
							'<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; ' +
								'You have entered a already exsisting Nickname pls change and try again' +
								' !</div>'
						);
						$('#btn-form_btn_submit').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
					});
				}
			}
		});
		$.ajax({
			type: 'POST',
			url: 'createjson.php',
			data: data,
			beforeSend: function() {
				$('#error_mess').fadeOut();
				$('#form_btn_submit').html('<div class="login-row donroo row no-margin">Sending</div>');
			},
			success: function(response) {
				if (response == 1) {
					$('#error').fadeIn(1000, function() {
						$('#error_mess').html(
							'<div class="login-row donroo row no-margin alert alert-danger"><strong>user_email</strong>&nbsp; already exist!</div>'
						);
						$('#form_btn_submit').html('<div class="login-row btnroo row no-margin"><button class="btn btn-success btn-sm" name="create_acc" id="form_btn_submit">Create Account</button></div>');
					});
				} else if(response == 'Welcome you have been successfully registered') {
					$('#form_btn_submit').html('<div class="login-row donroo row no-margin">Submitting Form..</div>');
					setTimeout(
						'$(".registerform_ajax").fadeOut(600, function(){ $(".reg_form").load("../Templates/successfulregister.php"); }); ',
						3000
					);
				}
				else {
					$('#error_mess').fadeIn(1000, function() {
						$('#error_mess').html(
							'<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; ' +
								'You have entered a already exsisting Nickname pls change and try again' +
								' !</div>'
						);
						$('#btn-form_btn_submit').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
					});
				}
			}
			
		});
		return false;
	}
});
