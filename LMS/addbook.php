<?php
  $Bookid = $_POST['bookId'];
  $Name = $_POST['bookName'];
  $Publisher = $_POST['publisher'];
  $Price = $_POST['price'];
 
    
  $conn = new mysqli('localhost','root','','lms');

  if($conn->connect_error){
     die('connection failed : '.$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("insert into book(id,Name,Publisher,Price)
    values(?,?,?,?)");
    $stmt->bind_param("issd",$Bookid,$Name,$Publisher,$Price);
    $stmt->execute();
    echo "Book added successfully...";
    $stmt->close();
    $conn->close();
  }