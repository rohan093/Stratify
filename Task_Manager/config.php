<?php 

$l="localhost";
$u="root";
$p="";
$db="task_manager";

$conn=mysqli_connect($l,$u,$p,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>