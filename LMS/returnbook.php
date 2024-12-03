<?php
  $BookId = $_POST['returnBookId'];
  $BookName = $_POST['returnBookName'];
  $StudentName = $_POST['studentReturnName'];
  $StudentId = $_POST['studentReturnId'];
  $returnDate = $_POST['returnDate'];

  $conn = new mysqli('localhost', 'root', '', 'lms');

  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  } 
  else {
    $stmt = $conn->prepare("INSERT INTO returnbook (Bookid, BookName, Studentname, Studentid, ReturnbookDate) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issis", $BookId, $BookName, $StudentName, $StudentId, $returnDate);
    $stmt->execute();
    echo "Book return by student: " . $StudentName . " (ID: " . $StudentId . ")";
    $stmt->close();
    $conn->close();
  }
?>
