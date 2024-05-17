<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_registration";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if (empty($username) || empty($password)) {
    echo "All fields are required";
    exit;
}


$stmt = $conn -> prepare("SELECT * FROM form WHERE username = ? AND password = ?");
$stmt -> bind_param("ss", $username, $password);
$stmt -> execute();
$result = $stmt -> get_result();

if ($result -> num_rows > 0) {
    header('Location: homepage.php');
} else {
    echo "Invalid username/password";
}

$conn -> close();
?>