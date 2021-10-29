<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
	<meta  name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin dashboard</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- 	<link rel="stylesheet"  href="../css/all.min.css">
 -->	
    <link rel="stylesheet" href="css/font-awesome.min.css">

 <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="css/adminstyle.css">

</head>
<body>
	<nav class="navbar navbar-dark fixed-top p-0 shadow"
	style="background-color: #225470;">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0"
	href="adminDashboard.php">MedicalTools <small class="text-white">Admin Area</small></a>
   </nav>
 <div class="container-fluid mb-5" style="margin-top: 40px;">
 	<div class="row">
 		<nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
 			<div class="sidebar-sticky">
 				<ul class="nav flex-column">
 					<li class="nav-item">
 						<a class="nav-link" href="adminDashboard.php">
 							<i class="fas fa-tachometer-alt"></i>
 							Dashboard
 						</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#">
 							<i class="fab fa-accessible-icon"></i>
 							Products
 						</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#">
 							<i class="fas fa-users"></i>
 							Customers
 						</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#">
 							<i class="fas fa-table"></i>
 							Sale report
 						</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#">
 							<i class="fas fa-table"></i>
 							Payment Status
 						</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#">
 							<i class="fab fa-accessible-icon"></i>
                       Feedback</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#">
 							<i class="fas fa-key"></i>
 							Change Password
 						</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#">
 							<i class="fa fa-sign-out-alt"></i>
 							Logout
 						</a>
 					</li>
 					
 				</ul>
 			</div>
 		</nav>
 	<!-- 	<div class="col-sm-9 mt-5">
 			<div class="row mx-5 text-center">
 				<div class="col-sm-4 mt-5">
 					<div class="card text-white bg-danger mb-3"
 					style="max-width: 18rem;">
 					<div class="card-header">Products</div>
 					<div class="card-body">
 						<h4 class="card-title">
 							5
 						</h4>
 						<a class="btn text-white" href="#">View</a>
 					</div>
 				</div>
 			</div>
 			<div class="col-sm-4 mt-5">
 					<div class="card text-white bg-warning mb-3"
 					style="max-width: 18rem;">
 					<div class="card-header">Customers</div>
 					<div class="card-body">
 						<h4 class="card-title">
 							75
 						</h4>
 						<a class="btn text-white" href="#">View</a>
 					</div>
 				</div>
 			</div>
 			<div class="col-sm-4 mt-5">
 					<div class="card text-white bg-info mb-3"
 					style="max-width: 18rem;">
 					<div class="card-header">Sold</div>
 					<div class="card-body">
 						<h4 class="card-title">
 							155
 						</h4>
 						<a class="btn text-white" href="#">View</a>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div> -->
 	
 	<div>

<a class="btn btn-danger box" href="#">
	<i class="fas fa-plus fa-2x"></i>
</a>
</div>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Add new Products</h3>
	<form action="addProductBTS.php"method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="product_name">Product Name</label>
			<input type="text" class="form-control" id="product_name" name="product_name">
		</div>

		<div class="form-group">
			<label for="product_desc">Product Description</label>
			<textarea class="form-control" id="product_desc" name="product_desc"></textarea>
		</div>

		
		<div class="form-group">
			<label for="original_price">Original Price</label>
			<input type="text" class="form-control" id="original_price" name="original_price">
		</div>
		<div class="form-group">
			<label for="original_price">Sale Price</label>
			<input type="text" class="form-control" id="sale_price" name="sale_price">
		</div>
		<div class="form-group">
			<label for="product_img">Product Image</label>
			<input type="file" class="form-control-file" id="product_img" name="product_img">
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-danger" id="productSubmitBtn" name="productSubmitBtn">Submit</button>
			<a href="adminPanelproducts.php" class="btn btn-secondary">Close</a>
		</div>
	</form>
</div>













<!-- </div> -->
</div>
</div>
<!-- <script type="text/javascript" src="js/jquery.min.js"></script>
 -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
 <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>


</body>
</html>
