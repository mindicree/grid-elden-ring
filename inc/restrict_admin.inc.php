<?php
    // get mysql connection and functions
    require_once 'mysql.inc.php';

    // check if session is found
    if (!isset($_SESSION['user_key'])) {
        echo 'session where?';
        header('location: ../login.php');
        exit();
    } 

    // check if session matches user
    $user_data = get_user_by_key($db_connection, $_SESSION['user_key']);
    if (!$user_data) {
        session_unset();
        session_destroy();
        header('location: ../login.php');
        exit();
    } 

    // check is user is admin
    if(!$user_data['is_admin']) {
        echo 'restricted access';
        exit();
    }
