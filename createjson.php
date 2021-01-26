<?php
$message = '';
$error = '';
if (isset($_POST["create_acc"])) {
    if (file_exists('userdata.json')) {
        $current_data = file_get_contents('profile.json');
        $array_data = json_decode($current_data, true);
        $extra = array(
            'email'     =>     $_POST["user_email"],
            'username'     =>     $_POST["user_name"],
            'linkedin'     =>     $_POST["linkedin"]
        );
        $array_data[] = $extra;
        $final_data = json_encode($array_data);
        if (file_put_contents('profile.json', $final_data)) {
            $message = "<label class='text-success'>File Appended Success fully</p>";
        }
    } else {
        $error = 'JSON File not exits';
    }
}
