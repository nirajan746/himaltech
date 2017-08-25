<?php
//connecting with localhost

$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];

include ('serverconnection.php');
echo 'success';
$sql = "INSERT INTO signup ( Name, Email,Username,Password,Confirm)
VALUES ('$name', '$email', '$username','$password','$confirm')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  //header ("Location: signup.php");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





?>