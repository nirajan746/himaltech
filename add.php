<?php
//connecting with localhost
include ('serverconnection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];

$sql = "INSERT INTO admin (name, email,username,password,confirm)
VALUES ('$name', '$email', '$username','$password','$confirm')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header ("Location: signup.php");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





?>