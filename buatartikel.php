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
	<form method="post">
		<div class="container">
			<div class="col-md-9">
				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="judul" class="form-control">
				</div>
				<div class="form-group">
					<label>Isi</label>
					<textarea name="text" class="form-control" cols="30" rows="10" ></textarea>
				</div>
				<button class="btn btn-primary" name="simpan">Create</button>
			</div>
			<div class="col-md-3 com-sm-6">
				<h3>Profil</h3>
				<ul>
					<li>1. Imam Nurrohmat 		  (5150411295)</li>
					<li>2. Willia Laela Apriliana (5150411305)</li>
					<li>3. Nurliana 			  (5150411291)</li>
					<li>4. Nurul Annisa 		  (5150411267)</li>
				</ul>
			</div>
		</div>
</form>	
<?php  
if (isset($_POST["simpan"])) 
{
	$artikel->create($_POST['judul'],$_POST['text']);
	echo "<script>alert('Data berhasil disimpan');</script>";
}

?>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>