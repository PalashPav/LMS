<?php

session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "lms";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM login WHERE Username = ? AND Password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows === 1) {
  
    $_SESSION['username'] = $user; 
    header("Location: AdminPanel.html");
    exit();
} else {
    
    echo "<script>
        alert('Invalid Username or Password!');
        window.location.href = 'index.html';
    </script>";
}

$stmt->close();
$conn->close();
?>
