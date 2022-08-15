<?php

// cara mengaktifkan session

 session_start();


 if (isset($_SESSION ["login"])) {
   
 	  header('location: dashboard.php');
    exit;

}



require 'function.php';

if(isset ($_POST['login'])) {
//ambil data dari tiap tiap element
$username = $_POST['username'];
$password = $_POST['Password'];


$result = mysqli_query ($conn, "SELECT * FROM user WHERE username  = '$username'");

if (mysqli_num_rows($result) > 0) {

//cek password

  $row = mysqli_fetch_array($result);
  if (password_verify($password, $row ["password"] )) {
    
    // lalu set atau pasang koding sessionnya
    $_SESSION ["login"] = true ;

    header("Location: dashboard.php");
 
  exit;
}    
}
$error = true;
}




?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8" />
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  	<title>SIGN IN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

  

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-3">
					<h2 class="heading-section" style="font-family: Times New Rowman"><u>Login</u></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">

			      			<h3 class="mb-4" style="font-family: Times New Rowman">Sign In</h3>
			      			
			      			<?php if ( isset ($error)): ?>
			            <p style="color: red; font-style: bold; "> username atau password tidak sesuai ! </p>
		               <?php endif ; ?>	


			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="" method="POST" style="font-family: Times New Rowman">
			      		
			      		<div class="form-group mt-3">
			      			<label>Username</label>
                        
                  <input type="text" name="username" class="form-control" placeholder="Username" value="" autocomplete="off">
			      		</div>

		            <div class="form-group">
		              <label >Password</label>
                         
                   <input type="password" name="Password" class="form-control" placeholder="Password" autocomplete="off">
		            </div>

		            <div class="form-group">
		            	<button type="submit" name="login" class="form-control btn btn-primary rounded submit px-5" style="font-family: Times New Rowman">Sign In
		            	</button>
		            </div>

		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a  href="registrasi.php" style="font-family: Times New Rowman">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

