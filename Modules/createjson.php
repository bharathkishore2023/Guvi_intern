<?php
$message = '';
$error_mess = '';
if (isset($_POST["create_acc"])) {
    if (file_exists('userdata.json')) {
        $current_data = file_get_contents('userdata.json');
        $array_data = json_decode($current_data , true);
        $extra = array(
            'username'=>$_POST["user_name"],
            'email'=>$_POST["user_email"],
            'linkedin'=>$_POST['linkedin'],
        );
        $array_data[] = $extra;
        $final_data = json_encode($array_data);
        if (file_put_contents('userdata.json', $final_data)) {
            $message = "<label class='text-success'>File Appended Success fully</p>";
        }
    } else {
        $error_mess = 'JSON File not exits';
    }
}
