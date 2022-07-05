<?php
    //check if login method is valid
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //connect to mysql db and get variable $db_connection
        require_once 'mysql.inc.php';

        //retrieve validation functions
        require_once 'validation.inc.php';

        //retrieve general functions
        require_once 'functions.inc.php';

        //TODO validate login information
        

        //attempt to find user
        $is_valid_user = get_user_from_db($db_connection, $username);

        //if is a valid user, continue to login, otherwise return to login page
        if (!$is_valid_user) {
            header('location: ../login.php?error=uidnotfound&uid='.$username);
            exit();
        } else {
            $db_password = $is_valid_user['pwd'];
            if (password_verify($password, $db_password)) {
                $user_data = $is_valid_user;
            } else {
                $user_data = false;
            }
        }

        //if all data is valid, login user, otherwise, return to page
        if(!$user_data) {
            header('location: ../login.php?error=invalid&uid='.$username);
            exit();
        } else {
            $login_key = generate_login_key();
            $key_is_set = set_user_as_logged_in($db_connection, $username, $login_key);
            if (!$key_is_set) {
                header('location: ../login.php?error=key$uid='.$username);
                exit();
            } else {
                session_start();
                $_SESSION['user_key'] = $login_key;
                $_SESSION['fname'] = $user_data['fname'];
                $_SESSION['lname'] = $user_data['lname'];
                header('location: ../index.php?login=logged_in');
                exit();
            }
        }
    } else {
        header('location: ../login.php?error=where$uid='.$username);
        exit();
    }