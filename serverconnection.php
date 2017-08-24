<?php
$dbname='login_members';
//server connection
$conn = mysqli_connect('localhost','root','');

	if (!$conn){
	die ('No connection with the database');
	}
	else 
		echo 'successful';
//database connection	
		mysqli_select_db($conn,$dbname) or die;
		
		
	?>