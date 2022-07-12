<?php

function get_tag_list_active($db) {
    // prepared statement setup
    $sql_code = "SELECT name AS tag FROM Tag WHERE is_active = TRUE";
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