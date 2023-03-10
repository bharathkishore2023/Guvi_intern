$(document).ready(function() {
    $("#submit").click(function() {
        var user_email = $("#email").val();
        var user_password = $("#user_password").val();
        var dataString = 'user_email1=' + user_email + '&user_password1=' + user_password;
        if (user_email == '' || user_password == '') {
            $("#error").html('<div class="alert alert-danger" style="text-align: center"> Enter your Details!!</div>');
        } else {
            $.ajax({
                type: "POST",
                url: "processor.php",
                data: dataString,
                cache: false,
                success: function(response) {
                    if (response == "LoginSuccess") {
                        var lEmail = localStorage.setItem('email', user_email);
                        window.location.href = "loggedin.php";
                    } else if (response == "Fail") {
                        $("#error").fadeIn(1000, function() {
                            $("#error").html('<div class="alert alert-danger" style="text-align: center"> Check your mail and password</div>');
                        });
                    }
                }
            });
        }
        return false;
    });
});