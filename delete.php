<?php

		$post_id=$_GET['id'];
		$db=mysqli_connect("localhost","root","","softlab");

		$sql="DELETE  FROM product WHERE id=$post_id";
		$result=mysqli_query($db,$sql);
		if($result){
			
			header ("Location: home.php");
			
		}
			
			
		else {
			
			echo "no";
		}
		
			
			
			
		

?>