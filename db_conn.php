<?php

$host="localhost";
$user="root";
$pass="";
$dbname="sis";

$conn = mysqli_connect($host, $user, $pass,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully"."</br>";

?>