<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn,'info');

if(isset($_POST["delete"]))
{
    $id = $_POST["id_formacao"];

    $query = "DELETE FROM formacao WHERE id_formacao='$id'";
    $query_run = mysqli_query($conn,$query);
}

?>