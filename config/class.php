<?php  

session_start();
$mysqli = new mysqli("localhost","root","","kelompok");

class user
{

	public $koneksi;

	function __construct($mysqli)
	{
		$this->koneksi=$mysqli;
	}

	function login($ema,$pass)
	{
		$ambil=	$this->koneksi->query("SELECT * FROM user WHERE email_user='$ema' AND password_user='$pass'");
		$ygcocok=$ambil->num_rows;
		if ($ygcocok==1) 
		{
			$akun=$ambil->fetch_assoc();
			$_SESSION['user']=$akun;
			return "sukses";
		}
		else
		{
			return "gagal";
		}
	}

	function daftar_user($nama,$email,$password,$cpassword)
	{
		$ambil = $this->koneksi->query("SELECT * FROM user WHERE email_user='$email'");
		$yangcocok = $ambil->num_rows;
		if ($yangcocok) 
		{
			return "gagal";
		}
		else
		{
			$this->koneksi->query("INSERT INTO user(nama_user,email_user,password_user) VALUES
				('$nama','$email','$password')");
			return "sukses";
		}
	}
}

class artikel
{

	public $koneksi;

	function __construct($mysqli)
	{
		$this->koneksi=$mysqli;
	}
	function create($judul,$text)
	{
		$this->koneksi->query("INSERT INTO artikel (judul,isi) VALUES ('$judul','$text')");
	}	

	function view()
	{
		$ambil=$this->koneksi->query("SELECT * FROM artikel");
		while ($pecah=$ambil->fetch_assoc()) 
		{
			$data[]=$pecah;
		}
		return $data;
	}
	function read($id)
	{
		$ambil=$this->koneksi->query("SELECT * FROM artikel WHERE id_artikel='$id'");
		while($pecah=$ambil->fetch_assoc())
		{
			$data[]=$pecah;
		}
		return $data;
	}
}
$artikel = new artikel($mysqli);
$user= new user($mysqli);
?>