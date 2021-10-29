<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<header class="card-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./image/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./product.html">Products</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="login me-3">
                    <button class="btn btn-outline-success ">Sign Up</button>
                    <button class="btn  btn-outline-danger">Login  </button>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center mt-5 pt-5">
            <h1>Our Products</h1>
        </div>
    </div>
	
	<?php
		session_start();
		$db=mysqli_connect("localhost","root","","softlab");
		$sql="Select * FROM product";
		
		$result=mysqli_query($db,$sql);
		while ($row=mysqli_fetch_array($result)){
			
			
			
			?>
    <div class="album py-5 bg-light mt-5">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col-md-4 product_grid">
                    <div class="card shadow-sm">
                         <p><?php echo $row['name'] ?></p>
						 <img src="<?php echo $row['image'] ?>" width="100%" height="225" alt="logo"> 

                        <div class="card-body">
                            <p class="card-text"><?php echo $row['s_description'] ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group btn btn-sm btn-outline-secondary">
                                    <p><?php echo $row['price'] ?></p>
                                </div>
								
								
                                <small><button type="button" class="btn btn-sm btn-outline-secondary">Details</button></small>
                            </div>
                        </div>
                    </div>
                </div>
				
				<?php
			
			
			
			
		}
	
	
	?>

<footer class="footer mt-5">
    <div class="d-flex justify-content-center pt-3">
        <p class="footer_para">@make with love</p>
    </div>
</footer>
<script type="text/javascript" src="bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script>
</body>
</html>
