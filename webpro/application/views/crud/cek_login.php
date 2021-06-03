<?php 

include "koneksidaftar.php";

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($conn, "SELECT * FROM tabel_user WHERE username='$username' AND password='$password'");
	$row = mysqli_fetch_assoc($query);

	if (mysqli_num_rows($query) > 0) {
		session_start();
		$_SESSION['id_user'] = $row['id_user'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['nama'] = $row['nama_lengkap'];
		$_SESSION['login'] = "login";
		$_SESSION['akses'] = $row['akses'];

		header("location:udah_login/beranda.php");
	} else {
		header("location:login.php?pesan=gagal");
	}
}

