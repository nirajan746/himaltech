<?php

$conn = mysqli_connect('localhost','root','');
$dbname='login_members';
	if (!$conn){
	die ('No connection with the database');
	}
	else 
		echo 'successful';
	?>