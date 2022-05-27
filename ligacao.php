<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "info";


// Create connection
$mysqli = new mysqli($servername,$username,$password,$databaseName);


// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";

?>