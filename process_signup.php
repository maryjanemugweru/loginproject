<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_registration";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


if (empty($username) || empty($email) || empty($password)) {
    echo "All fields are required";
    exit;
}


$sql = "INSERT INTO form (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header('location:login.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>