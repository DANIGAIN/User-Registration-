<?php
$servername = "localhost";
$username = "dani";
$password = "Pass.1234";
$db_name ="User_Registration";


$conn = new mysqli($servername, $username, $password ,$db_name);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>