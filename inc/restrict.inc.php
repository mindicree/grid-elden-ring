<?php
    require_once 'mysql.inc.php';
    if (!isset($_SESSION['login_key'])) {
        echo 'session where?';
        header('location: ../login.php');
        exit();
    } 
    else {
        if (!get_user_by_key($db_connection, $_SESSION['login_key'])) {
            session_unset();
            session_destroy();
            header('location: ../login.php');
        }
    }