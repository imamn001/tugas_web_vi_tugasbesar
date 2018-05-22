<?php include 'config/class.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Blog Aing </title>

	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/Custom.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/Responsive.css">
	<link rel="stylesheet" href="js/jquery.min.js">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	<link rel="shortcut icon" type="image/ico" href="logo2.jpg">

</head>

	<body>
				<?php include 'tampilan.php'; ?>
		<section class="content">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<div class="section-title">
							<h3>Please Log In</h3>
						</div>
						<form method="post">
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control text-center" name="email" style="margin-left: 25%; width: 50%">
							</div>  
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control text-center" name="password" style="margin-left: 25%; width: 50%">
							</div>
							<div class="form-group">
								<button class="btn btn-primary" name="login">Login</button> -   <a href="" class="btnlupa" style="color: red;"> Forgot Password ?</a>
							</div>
							<div class="form-group"> 
								<a href="daftar.php">Jika anda belum mempunyai akun, daftar di sini</a>
							</div>

						</form>
						<?php 

						if (isset($_POST["login"])) 
						{
							$hasil=$user->login($_POST["email"],$_POST["password"]);
							if ($hasil=="sukses")
							{
								echo "<script>alert('login sukses');</script>";
								echo "<script>location='index.php';</script>";
							}
							else
							{
								echo "<script>alert('login gagal');</script>";
								echo "<script>location='login.php';</script>";
							}
						}

						?>
					</div>
				</div>  
			</div>
		</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>