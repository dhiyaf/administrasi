<?php 
	include "koneksi.php";
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);

 // menyesuaikan dengan data di database
 $perintah = "select username, password from user WHERE username = '$username'";
 $hasil = mysqli_query($connect,$perintah);
 $row = mysqli_fetch_assoc($hasil);

 if ($row['username'] == $username) {

 	if (password_verify($password,$row['password'])){
 		session_start(); // memulai fungsi session
 		$_SESSION['username'] = $username;
 		header("location:index.php"); 
 	}
 	else{

 		echo "<script type='text/javascript'>";
 		echo "window.reload;";
 		$message = "Password/Username Salah";
		echo "alert('$message');";
		echo "window.history.back()";
		echo "</script>";
	}
}
	 else {
			echo "<script type='text/javascript'>";
	 		echo "window.reload;";
	 		$message = "Password/Username Salah";
			echo "alert('$message');";
			echo "window.history.back()";
			echo "</script>";
	 }

 ?>