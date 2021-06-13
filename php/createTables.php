<?php 
include("config.php");

 $sqlCreateAdminTable = "CREATE TABLE IF NOT EXISTS Admins (
    id INT(4) AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(40),
    AdminPassword VARCHAR(50)
)";

if ($conn->query($sqlCreateAdminTable) === TRUE) {
    echo "Table Admins created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sqlCreateMedicTable = "CREATE TABLE IF NOT EXISTS Medics (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    FirstName VARCHAR(30),
    LastName VARCHAR(30),
    Phone VARCHAR(30),
    Email VARCHAR(50),
    MedicPassword VARCHAR(100),
    JMBG VARCHAR(20),
    MedicDesc VARCHAR(100), 
    MedicType VARCHAR(5),
    NumberOfPatients INTEGER)";

if ($conn->query($sqlCreateMedicTable) === TRUE) {
    echo "Table Medics created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>