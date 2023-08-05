<?php
// Database Connection in PHP

// Configuring db 

$db_name = "currency_checker";
$host = "localhost";
$user = "root";
$password = "";

$country_name = "Nepal";
$country_code = "np";

$conn = mysqli_connect($host, $user, $password, $db_name) or die();
$sql = "INSERT INTO cc_country(country_name,country_code)values('$country_name','$country_code')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "data inserted successfully";
}
