 
 <html>
   <head>
   <title>Sign up</title>
   <style>
			   .uper {
						 background-color: black;
						 color: white;
						 margin: 0px;
						 padding: 0px;
			} 

			.mid {
						 background-color: powderblue;;
						 color: white;
						 margin: 0px;
						 padding: 90px;
						 text-align: center;
			} 

</style>
   </head>
   <body>
   
   
   <div class="uper">
   
   <h1 style="text-align:center">Sign Up</h1>
    <p style="text-align:center">Please fill in this form to create an account.</p>
    <hr>
   </div>
   
     
	 <div class="mid">
     <form action="registration.php"  method="post">

    <label for="email"><b>Email</b></label>
    <input type="text"  name="email" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password"  name="psw" required><br>

    
	
	<label for="name"><b>first name</b></label>
    <input type="text"  name="fname" required><br>
	
	<label for="s_id"><b>last name</b></label>
    <input type="text"  name="lname" required><br>



    
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    
  
</form> 
			
			<a href="login.php" target="_top">Login page</a>


      </div>
   </body>
</html>