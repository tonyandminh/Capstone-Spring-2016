<?php

    $db = new mysqli("localhost", "bethany_negash_foundation", "");
    if(!$db){
        die ("Failed to connect");
    }

    else{
        require_once("lib/password.php");

        $method = $_POST['method'];
        if($method == "Login"){
            $email = _POST['email'];
            $password = _POST['password'];
            Login($email, $password);
        }

        function Login($email, $password){
            $sql = "SELECT password FROM login_t WHERE email = '$email';";
            $result = $db->query($sql);

            if($result->num_rows > 0){
                // Check if the hashed password stored in the db is the same as the input password
                return (password_verify($password, $result['password']) == 1) ? "success" : "fail"; // success when 1 is returned
            }
            else {
                return "fail";
            }
        }

        function SignUp($email, $password){

        }
    }
 ?>
