<?php

function get_cpu_brand_list($db) {
    // prepared statement setup
    $sql_code = "SELECT brand AS cpu_brand FROM CPUModel GROUP BY brand";
    $result = mysqli_query($db, $sql_code);
    return $result;
}

function get_cpu_speed_list_active($db) {
    // prepared statement setup
    $sql_code = "SELECT name AS cpu_speed FROM CPUSpeed WHERE is_active = TRUE";
    $result = mysqli_query($db, $sql_code);
    return $result;
}