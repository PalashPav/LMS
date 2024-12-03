<?php
  $BookId = $_POST['issueBookId'];
  $BookName = $_POST['issueBookName'];
  $StudentName = $_POST['studentName'];
  $StudentId = $_POST['studentId'];
  $issueDate = $_POST['issueDate'];

  $conn = new mysqli('localhost', 'root', '', 'lms');

  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  } 
  else {
    $stmt = $conn->prepare("INSERT INTO issuebook (Bookid, BookName, StudentName, StudentId, issuedate) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issis", $BookId, $BookName, $StudentName, $StudentId, $issueDate);
    $stmt->execute();
    echo "Book issued to student: " . $StudentName . " (ID: " . $StudentId . ")";
    $stmt->close();
    $conn->close();
  }
?>
