<?php

function get_cpu_brand_list($db) {
    // prepared statement setup
    $sql_code = "SELECT brand AS cpu_brand FROM CPUModel GROUP BY brand";
    $sql_statement = mysqli_stmt_init($db);

    //check if statement is prepared, otherwise, return sql error
    if (mysqli_stmt_prepare($sql_statement, $sql_code)) {
        mysqli_stmt_bind_param($sql_statement);
        mysqli_stmt_execute($sql_statement);
        $result = mysqli_stmt_get_result($sql_statement);

        if ($data = mysqli_fetch_all($result, MYSQLI_ASSOC)) {
            return $data;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function get_cpu_speed_list_active($db) {
    // prepared statement setup
    $sql_code = "SELECT name AS cpu_speed FROM CPUSpeed WHERE is_active = TRUE";
    $sql_statement = mysqli_stmt_init($db);

    //check if statement is prepared, otherwise, return sql error
    if (mysqli_stmt_prepare($sql_statement, $sql_code)) {
        mysqli_stmt_bind_param($sql_statement);
        mysqli_stmt_execute($sql_statement);
        $result = mysqli_stmt_get_result($sql_statement);

        if ($data = mysqli_fetch_all($result, MYSQLI_ASSOC)) {
            return $data;
        } else {
            return false;
        }
    } else {
        return false;
    }
}