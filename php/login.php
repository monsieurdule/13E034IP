<?php

include("config.php");

if(isset($_POST['btnLoginSubmit'])){
    $email = $_POST['LoginPageEmail'];
    $password = $_POST['LoginPagePassword'];
    $selectAdmins = "SELECT * FROM Admins";
    $admins = $conn -> query($selectAdmins);
    $selectMedics = "SELECT * FROM Medics";
    $medics = $conn -> query($selectMedics);

    while($adminsrow = $admins->fetch_assoc()){
        if($adminsrow['Email'] == $email){
            if($adminsrow['AdminPassword'] == $password){
                header("Location: ../php/admin.php");
            }else{
                while($medicsrow = $medics->fetch_assoc()){
                    if($medicsrow['Email']=== $email){
                        if($medicsrow['MedicPassword']===$password){
                            header("Location: ../php/medic.php");
                        }
                        else{
                            header("Location: ../html/index.html");
                        }
                    }
                }
            }
        }
    }
}

$conn->close();

?>