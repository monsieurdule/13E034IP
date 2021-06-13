<?php
    
    $conn = new mysqli('localhost', 'root', '');
    if($conn->connect_error){
        die("Ne radi".$conn->connect_error);
    }
    $sqlcreate = "CREATE DATABASE IF NOT EXISTS G09";
    if($conn->query($sqlcreate) === TRUE) {
        echo "Baza kreirana";
    }else{
        echo"Baza nije kreirana". $conn->error;
    }

    $conn->close();
    
?>