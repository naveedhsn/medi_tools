<?php
session_start();
//header("location:signup.php");
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'softlab');

$Email=$_POST["email"];

$pass=$_POST["psw"];

$fname=$_POST["fname"];

$lname=$_POST["lname"];

$s=("select * from users where email='$Email'");
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);


if($num==1)
{
	echo "already exists";
}

else{
	$reg="insert into users (firstname,lastname,email,password) values ('$fname','$lname','$Email','$pass')";
	
	
	//echo $reg;
	mysqli_query($con,$reg);
	echo "<script>location.assign('login.php');</script>";
}
             
?>