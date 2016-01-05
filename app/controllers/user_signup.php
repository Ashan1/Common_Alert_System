<?php
if($_POST) {
    //check if its an ajax request, exit if not
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        $output = json_encode(array( //create JSON data
            'type' => 'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data    }

        //Sanitize input data using PHP filter_var().
        $user_name = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
        $user_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
        $user_nic = filter_var($_POST["user_nic"], FILTER_SANITIZE_NUMBER_INT);
        $user_title = filter_var($_POST["user_title"], FILTER_SANITIZE_STRING);
        $user_mobile = filter_var($_POST["user_mobile"], FILTER_SANITIZE_NUMBER_INT);
        $user_address = filter_var($_POST["user_address"], FILTER_SANITIZE_STRING);
        //additional php validation
        if (strlen($user_name)< 3) { // If length is less than 4 it will output JSON error.
            $output = json_encode(array('type' => 'error', 'text' => 'Name is too short or empty!'));
            die($output);
        }
        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) { //email validation
            $output = json_encode(array('type' => 'error', 'text' => 'Please enter a valid email!'));
            die($output);
        }
        if (strlen($user_nic)> 10) { //check for valid numbers in country code field
            $output = json_encode(array('type' => 'error', 'text' => 'Enter only digits in country code'));
            die($output);
        }
        if (strlen($user_title) == 0) { //check for valid numbers in phone number field
            $output = json_encode(array('type' => 'error', 'text' => 'Enter only digits in phone number'));
            die($output);
        }
        if (strlen($user_mobile) > 10) { //check emtpy subject
            $output = json_encode(array('type' => 'error', 'text' => 'Subject is required'));
            die($output);
        }
        if (strlen($user_address) == 0) { //check emtpy message
            $output = json_encode(array('type' => 'error', 'text' => 'Too short message! Please enter something.'));
            die($output);
        }
    }
}

?>