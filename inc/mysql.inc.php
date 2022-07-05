<?php

//values for connecting to mysql database
$db_server = $_SERVER['DB_SERVER'];
$db_username = $_SERVER['DB_USERNAME'];
$db_password = $_SERVER['DB_PASSWORD'];
$db_name = $_SERVER['DB_NAME'];

//create connection to mysql database
$db_connection = mysqli_connect($db_server, $db_username, $db_password, $db_name);

//if connection could not be established, kill process
if (!$db_connection) { die ('Error connecting to database\nMessage: ' . mysqli_connect_error()); }

function get_user_from_db($db, $uid) {
    // prepared statement setup
    $sql_code = "SELECT * FROM User WHERE user_id = ?";
    $sql_statement = mysqli_stmt_init($db);

    //check if statement is prepared, otherwise, return sql error
    if (mysqli_stmt_prepare($sql_statement, $sql_code)) {
        mysqli_stmt_bind_param($sql_statement, "s", $uid);
        mysqli_stmt_execute($sql_statement);
        $result = mysqli_stmt_get_result($sql_statement);

        if ($data = mysqli_fetch_assoc($result)) {
            return $data;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function get_user_by_key($db, $key) {
    // prepared statement setup
    $sql_code = "SELECT * FROM User WHERE login_key = ?";
    $sql_statement = mysqli_stmt_init($db);

    //check if statement is prepared, otherwise, return sql error
    if (mysqli_stmt_prepare($sql_statement, $sql_code)) {
        mysqli_stmt_bind_param($sql_statement, "s", $key);
        mysqli_stmt_execute($sql_statement);
        $result = mysqli_stmt_get_result($sql_statement);

        if ($data = mysqli_fetch_assoc($result)) {
            return $data;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function set_user_as_logged_in($db, $uid, $key) {
    $sql_code = 'UPDATE User SET login_key = ? WHERE user_id = ?';
    $sql_statement = mysqli_stmt_init($db);

    //check if statement is prepared, otherwise, return sql error
    if (mysqli_stmt_prepare($sql_statement, $sql_code)) {
        mysqli_stmt_bind_param($sql_statement, "ss", $key, $uid);
        mysqli_stmt_execute($sql_statement);
        // $result = mysqli_stmt_get_result($sql_statement);

        if (mysqli_affected_rows($db) == 1) {
            return true;
        } else {
            return false;
        }
    } else {
        return NULL;
    }
}

function set_user_as_logged_out($db, $key) {
    $sql_code = 'UPDATE User SET login_key = NULL WHERE login_key = ?';
    $sql_statement = mysqli_stmt_init($db);

    //check if statement is prepared, otherwise, return sql error
    if (mysqli_stmt_prepare($sql_statement, $sql_code)) {
        mysqli_stmt_bind_param($sql_statement, "s", $key);
        mysqli_stmt_execute($sql_statement);
        // $result = mysqli_stmt_get_result($sql_statement);
        echo mysqli_affected_rows($db);

        if (mysqli_affected_rows($db) == 1) {
            return true;
        } else {
            return false;
        }
    } else {
        return NULL;
    }
}

