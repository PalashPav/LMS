<?php
  $username = $_POST['name'];
  $Email = $_POST['email'];
  $message = $_POST['message'];
    
  $conn = new mysqli('localhost','root','','lms');

  if($conn->connect_error){
     die('connection failed : '.$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("insert into contactus(Username,Email,Query)
    values(?,?,?)");
    $stmt->bind_param("sss",$username,$Email,$message);
    $stmt->execute();
    echo "Query registerted successfully...";
    $stmt->close();
    $conn->close();
  }