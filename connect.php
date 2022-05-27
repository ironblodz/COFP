<?php
$host="localhost";
$user="root";
$pass="root";
$database="FSJoaninho";

$conn = new mysqli($host,$user,$pass,$database);

if($conn->connect_errno){
    $code = $conn->connect_errno;
    $message = $conn->connect_error;
    printf('<p>conection error: %d %s</p>', $code, $message);
    exit(0);
}
$conn->set_charset('utf8');
?>