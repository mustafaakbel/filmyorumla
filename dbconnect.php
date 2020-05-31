<?php
$servername = "localhost";
$database = "filmyorumla";
$username = "yd";
$password = "123456";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>