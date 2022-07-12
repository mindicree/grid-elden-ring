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

//include all controllers in the con folder
require_once 'con/user_controller.php';
require_once 'con/comp_type_controller.php';
require_once 'con/cpu_controller.php';
require_once 'con/ram_controller.php';
require_once 'con/hdd_controller.php';
require_once 'con/tag_controller.php';