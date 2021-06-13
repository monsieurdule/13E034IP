<?

$SignUpFirstName = $_POST['SignUpFirstName'];
$SignUpLastName = $_POST['SignUpLastName'];
$SignUpJMBG = $_POST['SignUpJMBG'];
$SignUpTel = $_POST['SignUpTel'];
$SignUpEmail = $_POST['SignUpEmail'];
$SignUpPassword = $_POST['SignUpPassword'];

//database connection
$conn = new mysqli('localhost', 'root', '', 'G09DB');
if ($conn->connect_error) {
    die('Connection Failed');
} else {
    $stmt = $conn->prepare("insert into registration (SignUpFirstName, SignUpLastName,
                            SignUpJMBG, SignUpTel, SignUpEmail, SignUpPassword)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $SignUpFirstName, $SignUpLastName, $SignUpJMBG, $SignUpTel, $SignUpEmail, $SignUpPassword);
    if ($stmt->execute()) {
        echo "New record inserted successfully";
    } else {
        echo $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
