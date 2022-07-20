<?php

function get_ram_list_active($db) {
    // prepared statement setup
    $sql_code = "SELECT name AS ram FROM RAM WHERE is_active = TRUE";
    $result = mysqli_query($db, $sql_code);
    return $result;
}