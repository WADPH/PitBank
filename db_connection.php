<?php
//Vars for DB connection
$db_host = "localhost";  // Host
$db_user = "root";       // Username
$db_pass = "root";       // Pass
$db_name = "pitbank";    // Name of DB

// Creating connection
$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Checking
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

// Setting UTF-8 for DEFALTANOS value
$mysql->set_charset("utf8");

?>