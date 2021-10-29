<?php
session_start();
$username="";
$password="";
$name="";
if( isset($_POST['email']) ){
	$username=$_POST['email'];
}

if( isset($_POST['psw']) ){
	$password=$_POST['psw'];
}
if( isset($_POST['name']) ){
	$name=$_POST['name'];
}
///database connection
try{
	$conn = new PDO("mysql:host=localhost:3306;dbname=softlab;","root","");
}
catch(PDOException $err){
	echo "<script>window.alert('db connection error');</script>";
	echo "<script>location.assign('index.php');</script>";
}


$sqlquery="SELECT * FROM users WHERE email='$username' AND password='$password'";

$object=$conn->query($sqlquery);
if($object->rowCount()==1){
	
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	$_SESSION['name']=$name;
	echo "<script>location.assign('adminDashboard.php');</script>";
}
else{
	echo "<script>location.assign('index.php');</script>";
}

?>