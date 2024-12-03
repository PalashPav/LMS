<?php
  $username = $_POST['username'];
  $Email = $_POST['email'];
  $PhoneNumber = $_POST['Pnumber'];
  $Password = $_POST['password'];
  $ConfirmPassword = $_POST['confirm_password'];
    
  $conn = new mysqli('localhost','root','','lms');

  if($conn->connect_error){
     die('connection failed : '.$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("insert into registration(Username,Email,Phonenumber,Password,Confirmpassword)
    values(?,?,?,?,?)");
    $stmt->bind_param("ssiss",$username,$Email,$PhoneNumber,$Password,$ConfirmPassword);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
  }