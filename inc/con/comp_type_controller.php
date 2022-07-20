<?php

function get_comp_type_list_all($db) {
    // prepared statement setup
    $sql_code = "SELECT * FROM CompType";
    $result = mysqli_query($db, $sql_code);
    return $result;
}

function get_comp_type_list_active($db) {
    // prepared statement setup
    $sql_code = "SELECT * FROM CompType WHERE is_active = TRUE";
    $result = mysqli_query($db, $sql_code);
    return $result;
}