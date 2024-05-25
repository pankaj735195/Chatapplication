<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "u550600192_currency";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    // Database connection error
    echo "Database connection error: " . mysqli_connect_error();
} else {
    echo "Database connection successful!";
}
?>