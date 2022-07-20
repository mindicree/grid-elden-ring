<?php

function get_tag_list_active($db) {
    // prepared statement setup
    $sql_code = "SELECT name AS tag FROM Tag WHERE is_active = TRUE";
    $result = mysqli_query($db, $sql_code);
    return $result;
}