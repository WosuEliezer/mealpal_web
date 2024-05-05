<?php

$sname = "localhost";
$uname = "root"; // corrected variable name
$password = "";
$db_name = "mealpal_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name); // added semicolon at the end

if(!$conn) {
    echo "connection failed"; // added semicolon at the end
}
?>
