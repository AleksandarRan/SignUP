<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>