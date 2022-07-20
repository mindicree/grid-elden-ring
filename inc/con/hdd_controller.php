<?php

function get_hdd_list_active($db) {
    // prepared statement setup
    $sql_code = "SELECT name AS hdd FROM HDD WHERE is_active = TRUE";
    $result = mysqli_query($db, $sql_code);
    return $result;
}