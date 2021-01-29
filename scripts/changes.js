$('document').ready(function () {
    $("#register-form").validate({
        rules:
        {
            user_name: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                user_email: true
            },
            user_linkedin: {
                required: true,
                user_linkedin: true
            },
        },
        messages:
        {
            user_name: "please enter user name",
            email: "please enter a valid email address",
            user_linkedin: "Please enter a valid URL"
        },
        submitHandler: formHandler
    });
    function formHandler() {
        var data = $("#register-form").serialize();
        $.ajax({
            type: 'POST',
            url: 'changes.php',
            data: data,
            beforeSend: function () {
                $("#error").fadeOut();
                $("#btn-submit").html('sending ...');
            },
            success: function (response) {
                if (response == "fail") {
                    $("#error").fadeIn(1000, function () {
                        $("#error").html('<div class="alert alert-danger"> Email already registered !</div>');
                        $("#btn-submit").html('Create Account');
                    });
                } else {
                    $("#btn-submit").html('Updating ...');
                    setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("profile.php"); }); ', 3000);
                }
            }
        });
        return false;
    }
});
