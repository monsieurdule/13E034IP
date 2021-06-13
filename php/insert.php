<?php
    include("config.php");

    $sql = "INSERT INTO Admins (Email, AdminPassword) VALUES ('dusan@admin.com', '123456')";

    if($conn->query($sql)===TRUE){
        echo "dodati admini";
    }else{
        echo "Greska".$conn->error;
    }

    $conn->close();
?>