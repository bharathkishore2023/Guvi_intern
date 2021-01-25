$('document').ready(function () {
    $("#reg_form_ajax").validate({
        rules:
        {
            user_name: {
                required: true,
                minlength: 3
            },
            user_email: {
                required: true,
                user_email: true
            },
        },
        messages:
        {
            user_name: "please enter user name",
            user_email: "please enter a valid user_email address",
        },
        submitHandler: submitForm
    });
    /* handle form submit */
    function submitForm() {
        var data = $("#reg_form_ajax").serialize();
        $.ajax({
            type: 'POST',
            url: 'changes.php',
            data: data,
            beforeSend: function () {
                $("#error_mess").fadeOut();
                $("#form_btn_submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success: function (response) {
                if (response == "OOPS!! register fail") {
                    $("#error_mess").fadeIn(1000, function () {
                        $("#error_mess").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry user_email already taken !</div>');
                        $("#form_btn_submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
                    });
                } else if (response == "Welcome you have been successfully registered") {
                    $("#form_btn_submit").html('Signing Up ...');
                    setTimeout('$(".form-signin").fadeOut(500, function(){ $(".registerform_ajax").load("../Templates/profile.php"); }); ', 3000);
                } else {
                    $("#error_mess").fadeIn(1000, function () {
                        $("#error_mess").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; ' + "Changes success" + ' !</div>');
                        $("#form_btn_submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
                    });
                }
            }
        });
        return false;
    }
});
