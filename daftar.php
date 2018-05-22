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
        <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center">Create a New Account</h1>
                <div class="account-wall">
                    <form class="form-signin" method="post">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="nama" name="nama" required autofocus>
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" name="email" required autofocus>
                        </div>
                        <div>
                        <input type="password" class="form-control" name="password" placeholder="Password" id="txtPassword" required>
                        </div>
                        <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" id="txtConfirmPassword" required autofocus>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btnSubmit" name="daftar">
                        Register</button>
                        <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                    </form>
                    <?php 

                    if (isset($_POST["daftar"])) 
                    {
                        $hasil=$user->daftar_user($_POST["nama"],$_POST["email"],$_POST["password"],$_POST["cpassword"]);
                        if ($hasil=="sukses")
                        {
                            echo "<script>alert('pendaftaran sukses, silahkan login');</script>";
                            echo "<script>location='login.php';</script>";
                        }
                        else
                        {
                            echo "<script>alert('pendaftaran gagal, Email sudah ada yang digunakan');</script>";
                            echo "<script>location='daftar.php';</script>";
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>