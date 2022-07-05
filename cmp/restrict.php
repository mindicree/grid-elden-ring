<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/inc/mysql.inc.php';
    if (!isset($_SESSION['user_key'])) {
        echo 'session where?';
        header('location: ../login.php');
        exit();
    } 
    else {
        if (!get_user_by_key($db_connection, $_SESSION['user_key'])) {
            session_unset();
            session_destroy();
            header('location: ../login.php');
        }
    }