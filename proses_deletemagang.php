<?php 
	include "koneksi.php";
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	$id_magang = test_input($_GET['id_magang']);
	
	$query = mysqli_query($connect,"delete from data_magang where id_magang='$id_magang'") or die(mysqli_error($connect));

	if ($query){
		header('location: magang.php');
	} else{
		echo mysqli_error();
	}	
?>