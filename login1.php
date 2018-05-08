<?php
	include("koneksiDB/configDB.php");
	include("class/database.php");
	include("class/pengguna.php");

	if(isset($_POST["username"]) OR isset($_POST["password"])){
		$username = $_POST["username"];
		$password = $_POST["password"];

		$user = new pengguna($username,$password);

		if($user->login() === FALSE){
			$pesan_error = "username dan password salah";
		}
		else{

			session_start();

			$_SESSION["username"] = $username;
			$_SESSION["password"] = $password;

			switch (strtolower($user->login())) {
				case "admin": header("location: tampilanadmin.php");
					break;
				
				case "petugas":  header("location: tampilanpetugas.php");
					break;
			}
		}
	}
?>