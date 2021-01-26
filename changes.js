$('document').ready(function () {
    $("#register-form").validate({
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
            user_email: "please enter a valid email address",
        },
        submitHandler: submitForm
    });
    function submitForm() {
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
                if (response == 1) {
                    $("#error").fadeIn(1000, function () {
                        $("#error").html('<div class="alert alert-danger"> Sorry user_email already taken !</div>');
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
