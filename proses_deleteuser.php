<?php 
	include "koneksi.php";
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	$id_user = test_input($_GET['id_user']);
	
	$query = mysqli_query($connect,"delete from user where id_user='$id_user' ") or die(mysqli_error($connect));

	if ($query){
		header('location: user.php');
	} else{
		echo mysqli_error();
	}	
?>