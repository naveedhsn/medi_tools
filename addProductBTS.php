<?php
session_start();
//header("location:signup.php");
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'softlab');
///	product_name	product_desc		original_price		sale_price		product_img
$PName=$_POST["product_name"];
$PDesc=$_POST["product_desc"];
$PSellPrice=$_POST["sale_price"];
$imagefilename=$_FILES['product_img'];

	$_FILES['product_img']['name'];
	$image=$_FILES['product_img']['name'];

	$CreateQuery="insert into product (name,image,s_description,price) values ('$PName','upload/$image','$PDesc','$PSellPrice')";

	mysqli_query($con,$CreateQuery);
	echo "<script>location.assign('index.html');</script>";
 ?>