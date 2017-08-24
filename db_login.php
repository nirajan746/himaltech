<?php

//connecting to server localhost

$conn = mysqli_connect('localhost','root','');
$dbname='login_members';
if (!conn){
die ('No connection with the database');
}
echo 'connection successful!!';

//connecting database login_members

mysqli_select_db($conn,$dbname) or die;

//retrieving data from the database
$username=$_POST['Username'];
$password=$_POST['Password'];

//Query the database for user 
$result= mysqli_query($conn,"select * from admin where Username='$username' and Password ='$password'") 
or die($conn,$mysqli_error());

$row=mysqli_fetch_array($resutl);

if (!empty ($row['Username'])==$username && ($row['Password'])==$password){
echo 'Login Successful'.'<br>'.'Admin:'.$row['Username'];
else 
echo 'Not a admin';
} 

?>
