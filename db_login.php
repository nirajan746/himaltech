<?php

//connecting to server localhost and database login_members	
	
	include ('serverconnection.php');

//retrieving data from the database

	$username=$_POST['username'];
	$password=$_POST['password'];

//Query the database for user 

	$result= mysqli_query($conn,"select * from admin where Username='$username' and Password ='$password'") 
	or die('Error');
	
	$row=mysqli_fetch_array($result);

	if (!empty ($row['Username'])==$username && ($row['Password'])==$password){
//echo 'Login Successful'.'<br>'.'Admin:'.$row['Username'];
	header ("Location: signup.php");
	}
	else 
	{
	die ('Not admin!');}
?>
