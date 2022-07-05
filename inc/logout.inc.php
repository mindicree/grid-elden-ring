<?php 
    //remove session information
    session_start();

    //update database
    require_once 'mysql.inc.php';
    $is_updated = set_user_as_logged_out($db_connection, $_SESSION['user_key']);

    if(!$is_updated) {
        echo 'Error logging out. Please contact support.';
        exit();
    }

    //destroy session and its variables
    session_unset();
    session_destroy();
    
    //return to home screen
    header('location: ../index?login=logged_out');