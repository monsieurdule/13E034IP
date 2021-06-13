<?php

include("config.php");

if(isset($_POST['MedicSubmitInput'])){
    $MedicFirstName = $_POST['MedicFirstName'];
    $MedicLastName = $_POST['MedicLastName'];
    $MedicPhone = $_POST['MedicPhone'];
    $MedicEmail = $_POST['MedicEmail'];
    $MedicPassword = $_POST['MedicPassword'];
    $MedicJMBG = $_POST['MedicJMBG'];
    $MedicDesc = $_POST['MedicDesc'];
    $MedicType = $_POST['MedicType'];
    $MedicNumberOfPatients = $_POST['MedicNumberOfPatients'];
    
    $sql="INSERT INTO Medics(FirstName, LastName, Phone, Email, MedicPassword, JMBG
                        MedicDesc, MedicType, NumberOfPatients) VALUES 
                        (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssi", $MedicFirstName, $MedicLastName, $MedicPhone, 
$MedicEmail, $MedicPassword, $MedicJMBG,
$MedicDesc, $MedicType, $MedicNumberOfPatients);
if ($stmt->execute()) {
    echo "New record inserted successfully";
} else {
    echo $stmt->error;
}
$stmt->close();
}else{}

$conn->close();
?>