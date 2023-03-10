$(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "profile1.php",
                data: {"user_name": user_name},
                cache: false,
                success: function(response) {
                    localStorage.setItem('data', data);
                    console.log(localStorage.getItem('data'));
                }
            });
        return false;
});