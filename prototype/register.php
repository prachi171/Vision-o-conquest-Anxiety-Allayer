<!--
//register.php
!-->

<?php

include('database_connection.php');

session_start();

$message = '';

if(isset($_SESSION['user_id']))
{
	header('location:index.php');
}

if(isset($_POST["register"]))
{
	$username = trim($_POST["username"]);
	$email = trim($_POST["email"]);
	$password = trim($_POST["password"]);
	$check_query = "
	SELECT * FROM login 
	WHERE username = :username
	";
	$statement = $connect->prepare($check_query);
	$check_data = array(
		':username'		=>	$username
	);
	if($statement->execute($check_data))	
	{
		if($statement->rowCount() > 0)
		{
			$message .= '<p><label>Username already taken</label></p>';
		}
		else
		{
			if(empty($username))
			{
				$message .= '<p><label>Username is required</label></p>';
			}
			if(empty($email))
			{
				$message .= '<p><label>Email is required</label></p>';
			}
			if(empty($password))
			{
				$message .= '<p><label>Password is required</label></p>';
			}
			else
			{
				if($password != $_POST['confirm_password'])
				{
					$message .= '<p><label>Password not match</label></p>';
				}
			}
			if($message == '')
			{
				$data = array(
					':username'		=>	$username,
					':password'		=>	password_hash($password, PASSWORD_DEFAULT),
					':email'		=>	$email
				);

				$query = "
				INSERT INTO login 
				(username, password, email) 
				VALUES (:username, :password, :email)
				";
				$statement = $connect->prepare($query);
				if($statement->execute($data))
				{
					$message = "<label>Registration Completed</label>";
				}
			}
		}
	}
}

?>

<html>  
    <head>  
        <title>Chat Application using PHP Ajax Jquery</title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  		  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    </head>  
    <body>  
    	  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">
      <h1>Anxiety Allayer</h1>
    </div>
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
			<br />
			<div class="panel panel-default">
  				<div class="panel-heading">User Register</div>
				<div class="panel-body">
					<form method="post">
						<span class="text-danger"><?php echo $message; ?></span>
						<div class="form-group">
							<label style="color: black;">Enter Username</label>
							<input type="text" name="username" class="form-control" />
						</div>
						<div class="form-group">
							<label style="color: black;">Email</label>
							<input type="email" name="email" class="form-control" />
						</div>
						<div class="form-group">
							<label style="color: black;">Enter Password</label>
							<input type="password" name="password" class="form-control" />
						</div>
						<div class="form-group">
							<label style="color: black;">Re-enter Password</label>
							<input type="password" name="confirm_password" class="form-control" />
						</div>
						<div class="form-group">
							<input type="submit" name="register" class="btn btn-info" value="Register" style="font-size: 15px;"/>
						</div>
						<div align="center">
							<a href="login.php" style="font-size: 20px;">Login</a>
						</div>
					</form>
				</div>


      </div>
         <div class="container">
        <div class="social-links text-center">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div></div>
    </section><!-- End Contact Us Section -->


  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-countdown/jquery.countdown.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

			</div>
		</div>
    </body>  
</html>
