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
	<header>

		<div id="header-top">
			<div class="container">
				<div class="row">

					<div id="menu-top">
						<ul class="nav nav-pills navbar-right">
							<?php if (isset($_SESSION["user"])): ?>
								<ul class="nav navbar-nav navbar-right">
									<li><a href="user.php"><i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION["user"]["nama_user"];?></a></li>
									<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
								</ul>
							<?php endif ?>
							<!-- jika blm login (tidak ada session pelanggan) -->
							<?php if (!isset($_SESSION["user"])): ?>
								<ul class="nav navbar-nav navbar-right">
									<li><a href="login.php"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
									<li><a href="daftar.php"><i class="glyphicon glyphicon-user"></i> Daftar</a></li>
								</ul>
							<?php endif ?>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<div id="header-mid">

			<div class="container">
				<div class="row">

					<div class="logo text-center">
						<div class="col-md-2">
							<img src="logo2.jpg" alt="" width="50px" height="50px">
							<h6>Selamat Datang di Blog Edankeun mang !!!!</h6>
						</div>
					</div>

					<div class="iklan">
						<div class="col-md-10">
							<img src="edankeun.jpg" alt="" width="1000px" height="100px">
						</div>
					</div>

				</div>
			</div>

		</div>

		<div id="header-bot">

			<nav class="navbar navbar-default" role="navigation" id="navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

					</div>
					<div class="collapse navbar-collapse text-center" id="navbar">
						<div class="container">
							<ul class="nav navbar-nav">
								<li class=""> <a href="Index.php"> <i class="fa fa-home"></i> </a></li>
								<li>
									<a class="dropdown-toggle " id="dropdown" data-toggle="dropdown"> About <strong class="caret"></strong> </a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: black" >
										<a class="dropdown-item" href="#" style="color: white">Imam Nurrohmat</a><br/>
										<a class="dropdown-item" href="#" style="color: white">Willia Laela Apriliana</a><br/>
										<a class="dropdown-item" href="#" style="color: white">Nurliana</a><br/>
										<a class="dropdown-item" href="#" style="color: white">Nurul Annisa</a>
									</div>
								</li>
								<li><a href="#"> Contact </a></li>
								<li><a href="buatartikel.php"> Buat Artikel </a></li>
							</ul>

						</div>
					</div>
				</div>
			</nav>	

		</div>
		
	</header>



	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>