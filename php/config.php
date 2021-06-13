<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "G09";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
    die("Failed conn". $conn->connect_error);
}

?>