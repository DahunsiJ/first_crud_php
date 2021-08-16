<?php
include_once "config.php";

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
}

$sql = "INSERT 'users'('firstname', 'lastname', 'email', 'password', 'gender') VALUES ('$firstname', '$lastname', '$email', '$password', '$gender')";
$result = $conn->query($sql);

If($result == TRUE) {
    echo "New Record is succesfully";
} else {
    echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();

// }

?>
